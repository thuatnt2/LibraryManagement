<?php
App::uses('AppController', 'Controller');
/**
 * CiculationPolicies Controller
 *
 * @property CiculationPolicy $CiculationPolicy
 * @property PaginatorComponent $Paginator
 */
class CiculationPoliciesController extends AppController {

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
		$this->CiculationPolicy->recursive = 0;
		$this->set('ciculationPolicies', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CiculationPolicy->exists($id)) {
			throw new NotFoundException(__('Invalid ciculation policy'));
		}
		$options = array('conditions' => array('CiculationPolicy.' . $this->CiculationPolicy->primaryKey => $id));
		$this->set('ciculationPolicy', $this->CiculationPolicy->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CiculationPolicy->create();
			if ($this->CiculationPolicy->save($this->request->data)) {
				$this->Session->setFlash(__('The ciculation policy has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ciculation policy could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CiculationPolicy->exists($id)) {
			throw new NotFoundException(__('Invalid ciculation policy'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CiculationPolicy->save($this->request->data)) {
				$this->Session->setFlash(__('The ciculation policy has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ciculation policy could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CiculationPolicy.' . $this->CiculationPolicy->primaryKey => $id));
			$this->request->data = $this->CiculationPolicy->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CiculationPolicy->id = $id;
		if (!$this->CiculationPolicy->exists()) {
			throw new NotFoundException(__('Invalid ciculation policy'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CiculationPolicy->delete()) {
			$this->Session->setFlash(__('The ciculation policy has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ciculation policy could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
