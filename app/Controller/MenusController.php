<?php

App::uses('AppController', 'Controller');

/**
 * Menus Controller
 *
 * @property Menu $Menu
 * @property PaginatorComponent $Paginator
 */
class MenusController extends AppController {

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
        $this->Menu->recursive = 0;
        $this->set('menus', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Menu->exists($id)) {
            throw new NotFoundException(__('Invalid menu'));
        }
        $options = array('conditions' => array('Menu.' . $this->Menu->primaryKey => $id));
        $this->set('menu', $this->Menu->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Menu->create();
            if ($this->Menu->save($this->request->data)) {
                $this->Session->setFlash(__('The menu has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The menu could not be saved. Please, try again.'));
            }
        }
        $sub_title = 'Thêm mới menu';
        $menus = $this->Menu->find('list');
        $this->set(compact('menus', 'sub_title'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Menu->exists($id)) {
            throw new NotFoundException(__('Invalid menu'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            $this->Menu->id = $id;
            if ($this->Menu->save($this->request->data)) {
                $this->Session->setFlash(__('The menu has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The menu could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Menu.' . $this->Menu->primaryKey => $id));
            $this->request->data = $this->Menu->find('first', $options);
        }
        $sub_title = 'Chỉnh sửa menu';
        $menus = $this->Menu->find('list');
        $this->set(compact('menus', 'sub_title'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Menu->id = $id;
        if (!$this->Menu->exists()) {
            throw new NotFoundException(__('Invalid menu'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Menu->delete()) {
            $this->Session->setFlash(__('The menu has been deleted.'));
        } else {
            $this->Session->setFlash(__('The menu could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    function select_article() {
        $this->layout = null;
        $this->loadModel('Article');
        $this->paginate = array(
            'Article' => array(
                'conditions' => array('Article.published' => 1),
               // 'limit' => 10,
                'recursive' => 0,
                'order' => 'Article.id DESC'
            )
        );
        $articles = $this->paginate('Article');
        $this->set(compact('articles'));
    }

    function select_category() {
        $this->layout = 'ajax';
        $this->loadModel('Category');
        $this->paginate = array(
            'Category' => array(
                'conditions' => array('Category.published' => 1),
                //'limit' => 10,
                'recursive' => 0,
                'order' => 'Category.id DESC'
            )
        );
        $categories = $this->paginate('Category');
        $this->set(compact('categories'));
    }

    function select_link() {
        $this->layout = 'ajax';
    }

}
