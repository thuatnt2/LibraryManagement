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
				$this->loadModel('Usermgmt.User');
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
			$books = $this->Ciculation->find('all', array('conditions' => $conditions));
			$this->set('books', $books);
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
