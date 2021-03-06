<?php

App::uses('AppController', 'Controller');

/**
 * Readers Controller
 *
 * @property Reader $Reader
 * @property PaginatorComponent $Paginator
 */
class ReadersController extends AppController {

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
		$this->Reader->recursive = 2;
		//unbindModel
		$this->Reader->User->unbindModel(array('belongsTo' => array('UserGroup')));
		$this->Reader->User->unbindModel(array('hasOne' => array('Reader')));
		$this->Reader->Department->unbindModel(array('hasMany' => array('Reader')));
		//set field;
		$fields = array(
			'Reader.id',
			'User.fullname',
			'User.id',
			'User.username',
			'Department.name',
			//'Faculty.faculty_name',
			'Reader.created',
			'Reader.date_expiry',
			'User.is_active',
		);

		$conditions = array('User.is_deleted' => null);
		$this->paginate = array('fields' => $fields, 'limit' => 5, 'conditions' => $conditions);
		$readers = $this->Paginator->paginate();
		//debug($readers);exit();
		$this->set('readers', $readers);
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		if (!$this->Reader->exists($id)) {
			throw new NotFoundException(__('Invalid reader'));
		}
		$options = array('conditions' => array('Reader.' . $this->Reader->primaryKey => $id));
		$this->set('reader', $this->Reader->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Reader->create();
			if ($this->Reader->save($this->request->data)) {
				$this->Session->setFlash(__('The reader has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reader could not be saved. Please, try again.'));
			}
		}
		$users = $this->Reader->User->find('list');
		$this->loadModel('Faculty');
		$faculties = $this->Faculty->find('list');
		//$departments = $this->Reader->Department->find('list');		
		$reader_type = $this->Reader->reader_type;
		$this->set(compact('users', 'reader_type', 'faculties'));
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null) {
		if (!$this->Reader->exists($id)) {
			throw new NotFoundException(__('Invalid reader'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Reader->save($this->request->data)) {
				$this->Session->setFlash(__('The reader has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reader could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Reader.' . $this->Reader->primaryKey => $id));
			$this->request->data = $this->Reader->find('first', $options);
		}
		$users = $this->Reader->User->find('list');
		$departments = $this->Reader->Department->find('list');
		$this->set(compact('users', 'departments'));
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null) {
		$this->Reader->id = $id;
		if (!$this->Reader->exists()) {
			throw new NotFoundException(__('Invalid reader'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Reader->delete()) {
			$this->Session->setFlash(__('The reader has been deleted.'));
		} else {
			$this->Session->setFlash(__('The reader could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
