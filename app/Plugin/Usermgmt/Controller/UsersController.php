<?php

/*
  This file is part of UserMgmt.

  Author: Chetan Varshney (http://ektasoftwares.com)

  UserMgmt is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.

  UserMgmt is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
 */

App::uses('UserMgmtAppController', 'Usermgmt.Controller');

class UsersController extends UserMgmtAppController {

	/**
	 * This controller uses following models
	 *
	 * @var array
	 */
	public $uses = array('Usermgmt.User', 'Usermgmt.UserGroup', 'Usermgmt.LoginToken', 'Usermgmt.Reader');

	/**
	 * Called before the controller action.  You can use this method to configure and customize components
	 * or perform logic that needs to happen before each controller action.
	 *
	 * @return void
	 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->User->userAuth = $this->UserAuth;
	}

	/**
	 * Used to display all users by Admin
	 *
	 * @access public
	 * @return array
	 */
	public function index() {
		$this->User->unbindModel(array('hasMany' => array('LoginToken')));
		$users = $this->User->find('all', array('conditions' => array('user.user_group_id != 4'), 'order' => 'User.id desc'));
		$this->set('users', $users);
	}

	/**
	 * Used to display all reader
	 */
	public function reader() {
		$this->User->unbindModel(array('hasMany' => array('LoginToken')));
		$this->Reader->recursive = 1;
		$this->User->recursive = 1;
		$readers = $this->Reader->find('all', array('conditions' => array('user.user_group_id' => 2), 'order' => 'User.id desc'));
		debug($readers);
		exit();
		$this->set('readers', $readers);
	}

	/**
	 * Used to display detail of user by Admin
	 *
	 * @access public
	 * @param integer $userId user id of user
	 * @return array
	 */
	public function viewUser($userId = null) {
		if (!empty($userId)) {
			$user = $this->User->read(null, $userId);
			$this->set('user', $user);
		} else {
			$this->redirect('/allUsers');
		}
	}

	/**
	 * Used to display detail of user by user
	 *
	 * @access public
	 * @return array
	 */
	public function myprofile() {
		$userId = $this->UserAuth->getUserId();
		$user = $this->User->read(null, $userId);
		$this->set('user', $user);
	}

	/**
	 * Used to logged in the site
	 *
	 * @access public
	 * @return void
	 */
	public function login() {
		$this->layout = 'new';
		if ($this->request->isPost()) {
			$this->User->set($this->data);
			if ($this->User->LoginValidate()) {
				$email = $this->data['User']['username'];
				$password = $this->data['User']['password'];
				$user = $this->User->findByUsername($email);
				if (empty($user)) {
					$user = $this->User->findByEmail($email);
					if (empty($user)) {
						$this->Session->setFlash(__('Sai tài khoản hoặc mật khẩu'));
						return;
					}
					$this->redirect(array('controller' => 'index', 'action' => 'index'));
				}
				// check for inactived account
//				if ($user['User']['id'] != 1 and $user['User']['is_active'] == 0) {
//
//					$this->Session->setFlash(__('Sorry your account is not actived, please contact to Administrator'));
//					return;
//				}
//				// check for verified account
//				if ($user['User']['id'] != 1 and $user['User']['email_verified'] == 0) {
//					$this->Session->setFlash(__('Your registration has not been confirmed please verify your email or contact to Administrator'));
//					return;
//				}
				if (empty($user['User']['salt'])) {
					$hashed = md5($password);
				} else {
					$hashed = $this->UserAuth->makePassword($password, $user['User']['salt']);
				}
				if ($user['User']['password'] === $hashed) {
					if (empty($user['User']['salt'])) {
						$salt = $this->UserAuth->makeSalt();
						$user['User']['salt'] = $salt;
						$user['User']['password'] = $this->UserAuth->makePassword($password, $salt);
						$this->User->save($user, false);
					}
					$this->UserAuth->login($user);
					$remember = (!empty($this->data['User']['remember']));
					if ($remember) {
						$this->UserAuth->persist('2 weeks');
					}
					$OriginAfterLogin = $this->Session->read('Usermgmt.OriginAfterLogin');
					$this->Session->delete('Usermgmt.OriginAfterLogin');
					if ($user['UserGroup']['id'] == 4) {
						$redirect = '/';
					} else {
						$redirect = LOGIN_REDIRECT_URL;
					}
					//$redirect = (!empty($OriginAfterLogin)) ? $OriginAfterLogin : LOGIN_REDIRECT_URL;
					$this->redirect($redirect);
				} else {
					$this->Session->setFlash(__('Sai mã thẻ hoặc mật khẩu'));
					//$this->redirect('/');
				}
			}
		}
                $this->set('title_for_layout','Thư viện - Đăng nhập');
	}

	/**
	 * Used to logged out from the site
	 *
	 * @access public
	 * @return void
	 */
	public function logout() {
		$this->UserAuth->logout();
//        $this->Session->setFlash(__('You are successfully signed out'));
		$this->redirect(LOGOUT_REDIRECT_URL);
	}

	/**
	 * Used to register on the site
	 *
	 * @access public
	 * @return void
	 */
	public function register() {
		$userId = $this->UserAuth->getUserId();
		if ($userId) {
			$this->redirect("/dashboard");
		}
		if (SITE_REGISTRATION) {
			$userGroups = $this->UserGroup->getGroupsForRegistration();
			$this->set('userGroups', $userGroups);
			if ($this->request->isPost()) {
				if (USE_RECAPTCHA && !$this->RequestHandler->isAjax()) {
					$this->request->data['User']['captcha'] = (isset($this->request->data['recaptcha_response_field'])) ? $this->request->data['recaptcha_response_field'] : "";
				}
				$this->User->set($this->data);
				if ($this->User->RegisterValidate()) {
					if (!isset($this->data['User']['user_group_id'])) {
						$this->request->data['User']['user_group_id'] = DEFAULT_GROUP_ID;
					} elseif (!$this->UserGroup->isAllowedForRegistration($this->data['User']['user_group_id'])) {
						$this->Session->setFlash(__('Please select correct register as'));
						return;
					}
					$this->request->data['User']['actived'] = 1;
					if (!EMAIL_VERIFICATION) {
						$this->request->data['User']['email_verified'] = 1;
					}
					$ip = '';
					if (isset($_SERVER['REMOTE_ADDR'])) {
						$ip = $_SERVER['REMOTE_ADDR'];
					}
					$this->request->data['User']['ip_address'] = $ip;
					$salt = $this->UserAuth->makeSalt();
					$this->request->data['User']['salt'] = $salt;
					$this->request->data['User']['password'] = $this->UserAuth->makePassword($this->request->data['User']['password'], $salt);
					$this->User->save($this->request->data, false);
					$userId = $this->User->getLastInsertID();
					$user = $this->User->findById($userId);
					if (SEND_REGISTRATION_MAIL && !EMAIL_VERIFICATION) {
						$this->User->sendRegistrationMail($user);
					}
					if (EMAIL_VERIFICATION) {
						$this->User->sendVerificationMail($user);
					}
					if (isset($this->request->data['User']['email_verified']) && $this->request->data['User']['email_verified']) {
						$this->UserAuth->login($user);
						$this->redirect('/');
					} else {
						$this->Session->setFlash(__('Please check your mail and confirm your registration'));
						$this->redirect('/register');
					}
				}
			}
		} else {
			$this->Session->setFlash(__('Sorry new registration is currently disabled, please try again later'));
			$this->redirect('/dang-nhap');
		}
	}

	/**
	 * Used to change the password by user
	 *
	 * @access public
	 * @return void
	 */
	public function changePassword() {
		$userId = $this->UserAuth->getUserId();
		if ($this->request->isPost()) {
			$this->User->set($this->data);
			if ($this->User->RegisterValidate()) {
				$user = array();
				$user['User']['id'] = $userId;
				$salt = $this->UserAuth->makeSalt();
				$user['User']['salt'] = $salt;
				$user['User']['password'] = $this->UserAuth->makePassword($this->request->data['User']['password'], $salt);
				$this->User->save($user, false);
				$this->LoginToken->deleteAll(array('LoginToken.user_id' => $userId), false);
				$this->Session->setFlash('Đổi mật khẩu thành công', 'flash_success');
				$this->redirect('/dashboard');
			}
		}
	}

	/**
	 * Used to change the user password by Admin
	 *
	 * @access public
	 * @param integer $userId user id of user
	 * @return void
	 */
	public function changeUserPassword($userId = null) {
		if (!empty($userId)) {
			$name = $this->User->getNameById($userId);
			$this->set('name', $name);
			if ($this->request->isPost()) {
				$this->User->set($this->data);
				if ($this->User->RegisterValidate()) {
					$user = array();
					$user['User']['id'] = $userId;
					$salt = $this->UserAuth->makeSalt();
					$user['User']['salt'] = $salt;
					$user['User']['password'] = $this->UserAuth->makePassword($this->request->data['User']['password'], $salt);
					$this->User->save($user, false);
					$this->LoginToken->deleteAll(array('LoginToken.user_id' => $userId), false);
					$this->Session->setFlash(__('Password for %s changed successfully', $name));
					$this->redirect('/allUsers');
				}
			}
		} else {
			$this->redirect('/allUsers');
		}
	}

	/**
	 * Used to add user on the site by Admin
	 *
	 * @access public
	 * @return void
	 */
	public function addUser() {

		$userGroups = $this->UserGroup->find('list', array('fields' => array('UserGroup.id', 'UserGroup.name')));
		$admin_group = array(ADMIN_GROUP_ID, LIBRARIAN_GROUP_ID, EDITOR_GROUP_ID);
		foreach ($userGroups as $k => $v) {
			if (!in_array($k, $admin_group)) {
				unset($userGroups[$k]);
			}
		}
		$this->set('userGroups', $userGroups);
		if ($this->request->isPost()) {
			if ($this->UserAuth->getGroupId() == ADMIN_GROUP_ID) {
				$this->User->set($this->data);
				if ($this->User->RegisterValidate()) {
					$this->request->data['User']['email_verified'] = 1;
					$this->request->data['User']['actived'] = 1;
					$salt = $this->UserAuth->makeSalt();
					$this->request->data['User']['salt'] = $salt;
					$this->request->data['User']['password'] = $this->UserAuth->makePassword($this->request->data['User']['password'], $salt);
					$this->User->save($this->request->data, false);
					$this->Session->setFlash('Thêm mới thành công người dùng '. $this->request->data['User']['fullname'], 'flash_success');
					$this->redirect('/nguoi-dung');
				} else {
					$this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
				}
			}
			else{
				$this->Session->setFlash('Chỉ người quản trị mới có quyền thêm mới người dùng', 'flash_error');
			}
		}

		$title_for_layout = 'Thêm mới người dùng';
		$this->set(compact('title_for_layout'));
	}

	/**
	 * Used to edit user on the site by Admin
	 *
	 * @access public
	 * @param integer $userId user id of user
	 * @return void
	 */
	public function editUser($userId = null) {
		if (!empty($userId)) {
			$userGroups = $this->UserGroup->getGroups();
			$this->set('userGroups', $userGroups);
			if ($this->request->isPut()) {
				$this->User->set($this->data);
				if ($this->User->RegisterValidate()) {
					$this->User->save($this->request->data, false);
					$this->Session->setFlash(__('The user is successfully updated'));
					$this->redirect('/allUsers');
				}
			} else {
				$user = $this->User->read(null, $userId);
				$this->request->data = null;
				if (!empty($user)) {
					$user['User']['password'] = '';
					$this->request->data = $user;
				}
			}
		} else {
			$this->redirect('/allUsers');
		}
	}

	/**
	 * Used to delete the user by Admin
	 *
	 * @access public
	 * @param integer $userId user id of user
	 * @return void
	 */
	public function deleteUser($userId = null) {
		if (!empty($userId)) {
			if ($this->request->isPost()) {
				if ($this->User->delete($userId, false)) {
					$this->LoginToken->deleteAll(array('LoginToken.user_id' => $userId), false);
					$this->Session->setFlash(__('User is successfully deleted'));
				}
			}
			$this->redirect('/allUsers');
		} else {
			$this->redirect('/allUsers');
		}
	}

	/**
	 * Used to delete the user by Admin
	 *
	 * @access public
	 * @param integer $userId user id of user
	 * @return void
	 */
	public function deleteReader($userId = null) {
		if (!empty($userId)) {
			if ($this->request->isPost()) {
				$this->User->id = $userId;
				if ($this->User->saveField('is_deleted', 1)) {
					$this->LoginToken->deleteAll(array('LoginToken.user_id' => $userId), false);
					$this->Session->setFlash('Xóa thành công 1 bạn đọc', 'flash_success');
				}
			}
			$this->redirect('/readers');
		} else {
			$this->redirect('/readers');
		}
	}

	/**
	 * Used to show dashboard of the user
	 *
	 * @access public
	 * @return array
	 */
	public function dashboard() {
		$userId = $this->UserAuth->getUserId();
		$user = $this->User->findById($userId);
		$this->set('user', $user);
	}

	/**
	 * Used to activate or deactivate user by Admin
	 *
	 * @access public
	 * @param integer $userId user id of user
	 * @param integer $actived actived or inactived
	 * @return void
	 */
	public function makeActiveInactived($userId = null, $actived = 0) {
		if (!empty($userId)) {
			$user = array();
			$user['User']['id'] = $userId;
			$user['User']['actived'] = ($actived) ? 1 : 0;
			$this->User->save($user, false);
			if ($actived) {
				$this->Session->setFlash(__('User is successfully activated'));
			} else {
				$this->Session->setFlash(__('User is successfully deactivated'));
			}
		}
		$this->redirect('/allUsers');
	}

	/**
	 * Used to verify email of user by Admin
	 *
	 * @access public
	 * @param integer $userId user id of user
	 * @return void
	 */
	public function verifyEmail($userId = null) {
		if (!empty($userId)) {
			$user = array();
			$user['User']['id'] = $userId;
			$user['User']['email_verified'] = 1;
			$this->User->save($user, false);
			$this->Session->setFlash(__('User email is successfully verified'));
		}
		$this->redirect('/allUsers');
	}

	/**
	 * Used to show access denied page if user want to view the page without permission
	 *
	 * @access public
	 * @return void
	 */
	public function accessDenied() {
		
	}

	/**
	 * Used to verify user's email address
	 *
	 * @access public
	 * @return void
	 */
	public function userVerification() {
		if (isset($_GET['ident']) && isset($_GET['activate'])) {
			$userId = $_GET['ident'];
			$activateKey = $_GET['activate'];
			$user = $this->User->read(null, $userId);
			if (!empty($user)) {
				if (!$user['User']['email_verified']) {
					$password = $user['User']['password'];
					$theKey = $this->User->getActivationKey($password);
					if ($activateKey == $theKey) {
						$user['User']['email_verified'] = 1;
						$this->User->save($user, false);
						if (SEND_REGISTRATION_MAIL && EMAIL_VERIFICATION) {
							$this->User->sendRegistrationMail($user);
						}
						$this->Session->setFlash(__('Thank you, your account is activated now'));
					}
				} else {
					$this->Session->setFlash(__('Thank you, your account is already activated'));
				}
			} else {
				$this->Session->setFlash(__('Sorry something went wrong, please click on the link again'));
			}
		} else {
			$this->Session->setFlash(__('Sorry something went wrong, please click on the link again'));
		}
		$this->redirect('/dang-nhap');
	}

	/**
	 * Used to send forgot password email to user
	 *
	 * @access public
	 * @return void
	 */
	public function forgotPassword() {
		if ($this->request->isPost()) {
			$this->User->set($this->data);
			if ($this->User->LoginValidate()) {
				$email = $this->data['User']['email'];
				$user = $this->User->findByUsername($email);
				if (empty($user)) {
					$user = $this->User->findByEmail($email);
					if (empty($user)) {
						$this->Session->setFlash(__('Incorrect Email/Username'));
						return;
					}
				}
// check for inactived account
				if ($user['User']['id'] != 1 and $user['User']['email_verified'] == 0) {
					$this->Session->setFlash(__('Your registration has not been confirmed yet please verify your email before reset password'));
					return;
				}
				$this->User->forgotPassword($user);
				$this->Session->setFlash(__('Please check your mail for reset your password'));
				$this->redirect('/dang-nhap');
			}
		}
	}

	/**
	 *  Used to reset password when user comes on the by clicking the password reset link from their email.
	 *
	 * @access public
	 * @return void
	 */
	public function activatePassword() {
		if ($this->request->isPost()) {
			if (!empty($this->data['User']['ident']) && !empty($this->data['User']['activate'])) {
				$this->set('ident', $this->data['User']['ident']);
				$this->set('activate', $this->data['User']['activate']);
				$this->User->set($this->data);
				if ($this->User->RegisterValidate()) {
					$userId = $this->data['User']['ident'];
					$activateKey = $this->data['User']['activate'];
					$user = $this->User->read(null, $userId);
					if (!empty($user)) {
						$password = $user['User']['password'];
						$thekey = $this->User->getActivationKey($password);
						if ($thekey == $activateKey) {
							$user['User']['password'] = $this->data['User']['password'];
							$salt = $this->UserAuth->makeSalt();
							$user['User']['salt'] = $salt;
							$user['User']['password'] = $this->UserAuth->makePassword($user['User']['password'], $salt);
							$this->User->save($user, false);
							$this->Session->setFlash(__('Your password has been reset successfully'));
							$this->redirect('/dang-nhap');
						} else {
							$this->Session->setFlash(__('Something went wrong, please send password reset link again'));
						}
					} else {
						$this->Session->setFlash(__('Something went wrong, please click again on the link in email'));
					}
				}
			} else {
				$this->Session->setFlash(__('Something went wrong, please click again on the link in email'));
			}
		} else {
			if (isset($_GET['ident']) && isset($_GET['activate'])) {
				$this->set('ident', $_GET['ident']);
				$this->set('activate', $_GET['activate']);
			}
		}
	}

	/**
	 * Used to send email verification mail to user
	 *
	 * @access public
	 * @return void
	 */
	public function emailVerification() {
		if ($this->request->isPost()) {
			$this->User->set($this->data);
			if ($this->User->LoginValidate()) {
				$email = $this->data['User']['email'];
				$user = $this->User->findByUsername($email);
				if (empty($user)) {
					$user = $this->User->findByEmail($email);
					if (empty($user)) {
						$this->Session->setFlash(__('Incorrect Email/Username'));
						return;
					}
				}
				if ($user['User']['email_verified'] == 0) {
					$this->User->sendVerificationMail($user);
					$this->Session->setFlash(__('Please check your mail to verify your email'));
				} else {
					$this->Session->setFlash(__('Your email is already verified'));
				}
				$this->redirect('/dang-nhap');
			}
		}
	}

	public function actived($id, $status, $page = 1) {
//debug($this->request);exit();
		$this->User->id = $id;
		$this->User->saveField('is_active', $status);
		if ($page == 1)
			$this->redirect(array('controller' => 'readers', 'action' => 'index'));
		else
			$this->redirect(array('controller' => 'readers', 'action' => 'index', 'page' => $page));
	}

	/**
	 * Add reader
	 */
	public function addReader() {
		$this->loadModel('Reader');
		if ($this->request->is('post')) {
			$this->User->set($this->data);
			$this->Reader->set($this->data);
			if ($this->User->validateReader()) {
				$this->request->data['User']['is_password_change'] = 0;
				$this->request->data['User']['is_active'] = 0;
				$this->request->data['User']['email_verified'] = 1;
				$this->request->data['User']['user_group_id'] = READER_GROUP_ID;

				if (isset($_SERVER['REMOTE_ADDR'])) {
					$ip = $_SERVER['REMOTE_ADDR'];
				}
				$this->request->data['User']['ip_address'] = $ip;
				$salt = $this->UserAuth->makeSalt();
				$this->request->data['User']['salt'] = $salt;
				$this->request->data['User']['password'] = $this->UserAuth->makePassword($this->request->data['User']['username'], $salt);

				$this->request->data['Reader']['department_id'] = $this->User->data['User']['department_id'];
				$this->request->data['Reader']['is_teacher'] = $this->User->data['User']['is_teacher'];
//get duration of expiry
				$duration_ciculation = $this->Session->read('CiculationPolicy.TGLT.amount');
				$date_expiry = strtotime('+' . $duration_ciculation . ' day', strtotime(date('d-M-y')));
				$this->request->data['Reader']['date_expiry'] = date('Y-m-d', $date_expiry);

				$this->User->create();
				debug($this->request->data);
				if ($this->User->saveAssociated($this->request->data)) {
					$this->Session->setFlash('Đăng kí thành công 1 bạn đọc', 'flash_success');
					$this->redirect('/readers');
				} else {
					$this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
				}
			} else {

				$this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
			}
		}

//$users = $this->Reader->User->find('list');
		$title_for_layout = 'Đăng kí mới bạn đọc';
		$this->loadModel('Faculty');
		$faculties = $this->Faculty->find('list');
		$reader_type = $this->User->reader_type;
                $sex = $this->User->sex;
		$this->set(compact('users', 'reader_type','sex', 'faculties','title_for_layout'));
	}

}