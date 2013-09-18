<?php
App::uses('AppController', 'Controller');
/**
 * LibArticles Controller
 *
 * @property LibArticle $LibArticle
 * @property PaginatorComponent $Paginator
 */
class LibArticlesController extends AppController {

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
		$this->LibArticle->recursive = 0;
		$this->set('libArticles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LibArticle->exists($id)) {
			throw new NotFoundException(__('Invalid lib article'));
		}
		$options = array('conditions' => array('LibArticle.' . $this->LibArticle->primaryKey => $id));
		$this->set('libArticle', $this->LibArticle->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LibArticle->create();
			if ($this->LibArticle->save($this->request->data)) {
				$this->Session->setFlash(__('The lib article has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lib article could not be saved. Please, try again.'));
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
		if (!$this->LibArticle->exists($id)) {
			throw new NotFoundException(__('Invalid lib article'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->LibArticle->save($this->request->data)) {
				$this->Session->setFlash(__('The lib article has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lib article could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LibArticle.' . $this->LibArticle->primaryKey => $id));
			$this->request->data = $this->LibArticle->find('first', $options);
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
		$this->LibArticle->id = $id;
		if (!$this->LibArticle->exists()) {
			throw new NotFoundException(__('Invalid lib article'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LibArticle->delete()) {
			$this->Session->setFlash(__('The lib article has been deleted.'));
		} else {
			$this->Session->setFlash(__('The lib article could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
