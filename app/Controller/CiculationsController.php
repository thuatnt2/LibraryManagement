<?php

App::uses('AppController', 'Controller');

/**
 * Ciculations Controller
 *
 * @property Ciculation $Ciculation
 * @property PaginatorComponent $Paginator
 */
class CiculationsController extends AppController {

	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator');

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
//		$this->Ciculation->recursive = 0;
//		$this->set('ciculations', $this->Paginator->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		if (!$this->Ciculation->exists($id)) {
			throw new NotFoundException(__('Invalid ciculation'));
		}
		$options = array('conditions' => array('Ciculation.' . $this->Ciculation->primaryKey => $id));
		$this->set('ciculation', $this->Ciculation->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
//		if ($this->request->is('post')) {
//			$this->Ciculation->create();
//			if ($this->Ciculation->save($this->request->data)) {
//				$this->Session->setFlash(__('The ciculation has been saved.'));
//				return $this->redirect(array('action' => 'index'));
//			} else {
//				$this->Session->setFlash(__('The ciculation could not be saved. Please, try again.'));
//			}
//		}
//		$bookSerials = $this->Ciculation->BookSerial->find('list');
//		$borrows = $this->Ciculation->Borrow->find('list');
//		$this->set(compact('bookSerials', 'borrows'));
		$sub_title = 'Quản lý lưu thông';
		$this->set(compact('sub_title'));
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null) {
		if (!$this->Ciculation->exists($id)) {
			throw new NotFoundException(__('Invalid ciculation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Ciculation->save($this->request->data)) {
				$this->Session->setFlash(__('The ciculation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ciculation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ciculation.' . $this->Ciculation->primaryKey => $id));
			$this->request->data = $this->Ciculation->find('first', $options);
		}
		$bookSerials = $this->Ciculation->BookSerial->find('list');
		$borrows = $this->Ciculation->Borrow->find('list');
		$this->set(compact('bookSerials', 'borrows'));
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null) {
		$this->Ciculation->id = $id;
		if (!$this->Ciculation->exists()) {
			throw new NotFoundException(__('Invalid ciculation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Ciculation->delete()) {
			$this->Session->setFlash(__('The ciculation has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ciculation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	//display all books that user has been borrowed
	public function bookBorrowed() {
		$reader = null;
		$books = null;
		if (!empty($this->request->query)) {
			$reader_code = $this->request->query['readerCode'];
			$this->loadModel('Usermgmt.Reader');
			$conditions = array('User.username' => $reader_code);
			$fields = array('Reader.*', 'User.username', 'User.fullname', 'Department.name', 'User.resident_address');
			//$conditions = array('')
			$reader = $this->Reader->find('first', array('conditions' => $conditions, 'fields' => $fields));
			if (!empty($reader)) {
				$conditions = array('Ciculation.reader' => $reader['User']['username']);
				$books = $this->Ciculation->find('all', array('conditions' => $conditions));
			}
		}
		$this->loadModel('Usermgmt.User');
		$reader_type = $this->User->reader_type;
		$this->set(compact('reader', 'books', 'reader_type'));
	}

	//display all books that user has been borrowed
	public function getCiculation() {
		$this->layout = null;
		$reader = null;
		if ($this->request->is('POST')) {
			$reader_code = $this->request->data['readerCode'];
			$this->loadModel('Usermgmt.Reader');
			$conditions = array('User.username' => $reader_code);
			$fields = array('Reader.*', 'User.username', 'User.fullname', 'Department.name', 'User.resident_address');
			//$conditions = array('')
			$reader = $this->Reader->find('first', array('conditions' => $conditions, 'fields' => $fields));
			if (!empty($reader)) {
				$this->Session->write('currentReader', $reader);
				$reader_type = $this->User->reader_type;
				$reader['Reader']['is_teacher'] = $reader_type[$reader['Reader']['is_teacher']];
				$reader['Reader']['status'] = $reader['Reader']['is_locked'] == 0 ? 'Được phép lưu thông' : 'Đang bị khóa';
				$reader['User']['resident_address'] = empty($reader['User']['resident_address']) ? 'Chưa xác định' : $reader['User']['resident_address'];
			}
		}
		$this->autoRender = false;
		exit(json_encode($reader));
	}

	public function booksCiculation() {
		if ($this->request->is('POST')) {
			$reader_code = $this->request->data['readerCode'];
			$conditions = array('Ciculation.reader' => $reader_code);
			$this->Ciculation->recursive = 2;
			$duration_extend = $this->Session->read('CiculationPolicy.SLGH.amount');
			$books = $this->Ciculation->find('all', array('conditions' => $conditions));
			for ($i = 0; $i < count($books); $i++) {
				if ($books[$i]['Ciculation']['extensions'] >= $duration_extend)
					$books[$i]['extension_allow'] = false;
				else
					$books[$i]['extension_allow'] = true;

				$now = time(); // or your date as well
				$date_return = strtotime($books[$i]['Ciculation']['date_return']);
				$datediff = $now - $date_return;
				$datediff = floor($datediff / (60 * 60 * 24));
				if ($datediff > 0) {
					$books[$i]['is_late'] = $datediff;
				}
			}
			$this->set('books', $books);
		}
	}

	public function borrowBook() {
		$result = array();
		$this->layout = null;
		$this->autoRender = false;
		if ($this->request->is('POST')) {
			$reader_code = $this->request->data['readerCode'];
			$book_code = $this->request->data['bookCode'];
			$this->loadModel('BookSerial');
			$this->BookSerial->recursive = 2;
			$field = array('BookSerial.id', 'Book.teacher_only', 'Book.borrow_type');
			$book_serial = $this->BookSerial->find('first', array('fields' => $field, 'conditions' => array('BookSerial.barcode' => $book_code)));
			$current_reader = $this->Session->read('currentReader');
			if ($book_serial['Book']['teacher_only'] == 0 && $current_reader['User']['is_teacher'] == 0) {
				$result['status'] = 0;
				$resutl['message'] = 'Sách này chỉ dành cho Giảng Viên';
			} else if ($book_serial['Book']['borrow_type'] == 0) {
				$result['status'] = 0;
				$resutl['message'] = 'Sách này chỉ đọc tại chỗ';
			} else {

				$data = array();
				$data['Ciculation']['reader'] = $reader_code;
				$data['Ciculation']['book_serial_id'] = $book_serial['BookSerial']['id'];
				$data['Ciculation']['extensions'] = 0;
				$duration_ciculation = $this->Session->read('CiculationPolicy.TGMS.amount');
				$date_return = strtotime('+' . $duration_ciculation . ' day', strtotime(date('d-M-y')));
				$data['Ciculation']['date_return'] = date('Y-m-d', $date_return);
				$user = $this->UserAuth->getUser();
				$this->Ciculation->create();
				if ($this->Ciculation->save($data)) {
					$result['status'] = 1;
					$resutl['message'] = 'Bạn đọc mượn sách thành công';
					$this->loadModel('BookSerial');
					$this->BookSerial->id = $book_serial['BookSerial']['id'];
					$this->BookSerial->saveField('status', 0);
				} else {
					$result['status'] = 0;
					$resutl['message'] = 'Đã có lỗi xảy ra trong quá trình mượn sách. Vui lòng thử lại';
				}
			}

			exit(json_encode($resutl));
		}
	}

	public function returnBook() {
		$result = array();
		$this->layout = null;
		$this->autoRender = false;
		if ($this->request->is('POST')) {
			$reader_code = $this->request->data['readerCode'];
			$book_code = $this->request->data['bookCode'];
			$this->loadModel('BookSerial');
			$book_serial = $this->BookSerial->findByBarcode($book_code, array('fields' => 'BookSerial.id'));
			$ciculation = $this->Ciculation->findByBookSerialId($book_serial['BookSerial']['id']);
			if (!empty($ciculation) && $ciculation['Ciculation']['reader'] == $reader_code) {
				$this->Ciculation->id = $ciculation['Ciculation']['id'];
				if ($this->Ciculation->delete()) {
					$result['status'] = 1;
					$result['message'] = 'Bạn đọc trả sách thành công';
					$this->loadModel('BookSerial');
					$this->BookSerial->id = $book_serial['BookSerial']['id'];
					$this->BookSerial->saveField('status', 1);
				} else {
					$result['status'] = 0;
					$result['message'] = 'Đã có lỗi xảy ra, không thể trả sách';
				}
			} else {
				$result['status'] = 0;
				$result['message'] = 'Đã có lỗi xảy ra, mã bạn đọc hoặc mã sách không hợp lệ';
			}
			exit(json_encode($result));
		}
	}

	public function renewBook() {
		$result = array();
		$result['status'] = 0;
		$this->layout = null;
		$this->autoRender = false;
		if ($this->request->is('POST')) {
			$reader_code = $this->request->data['readerCode'];
			$book_serial_id = $this->request->data['bookSerialId'];
			$this->loadModel('BookSerial');
			$book_serial = $this->BookSerial->read(null, $book_serial_id);
			$ciculation = $this->Ciculation->findByBookSerialId($book_serial_id);
			if (!empty($ciculation) && $ciculation['Ciculation']['reader'] == $reader_code) {
				$max_extentions = $this->Session->read('CiculationPolicy.SLGH.amount');
				if (!$ciculation['Ciculation']['extensions'] >= $max_extentions) {

					if ($this->Ciculation->updateAll(array('Ciculation.extensions' => 'Ciculation.extensions+1'), array('Ciculation.id' => $ciculation['Ciculation']['id']))) {
						$duration_extend = $this->Session->read('CiculationPolicy.TGMS.amount');
						$date_return = strtotime('+' . $duration_extend . ' day', strtotime($ciculation['Ciculation']['date_return']));
						$this->Ciculation->saveField('date_return', $date_return);
						$result['status'] = 1;
						$result['message'] = 'Đã gia hạn thành công';
					}
				} else {
					$result['message'] = 'Số lần gia hạn tối đa là ' . $max_extentions;
				}
			}
			exit(json_encode($result));
		}
	}

//	public function getCiculation(){
//		
//		$this->layout = null;
//		$reader = null;
//		$books = null;
//		if ($this->request->is('POST')) {
//			$reader_code = $this->request->data['readerCode'];
//			$this->loadModel('Usermgmt.Reader');
//			$conditions = array('User.username' => $reader_code);
//			$fields = array('Reader.*', 'User.username', 'User.fullname', 'Department.name', 'User.resident_address');
//			//$conditions = array('')
//			$reader = $this->Reader->find('first', array('conditions' => $conditions, 'fields' => $fields));
//			if (!empty($reader)) {
//				$conditions = array('Ciculation.reader' => $reader['User']['username']);
//				$books = $this->Ciculation->find('all', array('conditions' => $conditions));
//			}
//		}
//		$this->loadModel('Usermgmt.User');
//		$reader_type = $this->User->reader_type;
//		//$this->set(compact('reader', 'books','reader_type'));
//		$data['reader'] = $reader;
//		$data['books'] =$books;
//		$data['reader_type'] = $reader_type;
//		$this->autoRender = false;
//		exit(json_encode($data));
//		
//	}
}

