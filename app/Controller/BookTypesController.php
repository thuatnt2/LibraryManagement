<?php

App::uses('AppController', 'Controller');

/**
 * BookTypes Controller
 *
 * @property BookType $BookType
 * @property PaginatorComponent $Paginator
 */
class BookTypesController extends AppController {

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
        $this->BookType->recursive = 0;
        $this->set('bookTypes', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->BookType->exists($id)) {
            throw new NotFoundException(__('Invalid book type'));
        }
        $options = array('conditions' => array('BookType.' . $this->BookType->primaryKey => $id));
        $this->set('bookType', $this->BookType->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->BookType->create();
            $user = $this->UserAuth->getUser();
            $this->request->data['BookType']['user_created'] = $user['User']['fullname'] . ' (' . $user['UserGroup']['name'] . ')';
            if ($this->BookType->save($this->request->data)) {
                $this->Session->setFlash('Thêm thành công', 'flash_success');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
            }
        }

        $title_for_layout = 'Thêm thể loại sách';
        $sub_title = 'Thêm thể loại sách';
        $this->set(compact('title_for_layout', 'sub_title'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->BookType->exists($id)) {
            throw new NotFoundException(__('Invalid book type'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            $this->BookType->id = $id;
            if ($this->BookType->save($this->request->data)) {
                $this->Session->setFlash('Lưu thành công', 'flash_success');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
            }
        } else {
            $options = array('conditions' => array('BookType.' . $this->BookType->primaryKey => $id));
            $this->request->data = $this->BookType->find('first', $options);
        }

        $title_for_layout = 'Thêm thể loại sách';
        $sub_title = 'Thêm thể loại sách';
        $this->set(compact('title_for_layout', 'sub_title'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->BookType->id = $id;
        if (!$this->BookType->exists()) {
            throw new NotFoundException(__('Invalid book type'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->BookType->delete()) {
            $this->Session->setFlash('Xóa thành công', 'flash_success');
        } else {
            $this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
        }
        return $this->redirect(array('action' => 'index'));
    }
    public function getBookTypes(){
        return $this->BookType->find('list');
    }
    public function userView() {
        $this->layout = 'new';
        
    }
}
