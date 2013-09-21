<?php

App::uses('AppController', 'Controller');

/**
 * Categories Controller
 *
 * @property Category $Category
 * @property PaginatorComponent $Paginator
 */
class CategoriesController extends AppController {

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
        $this->Category->recursive = 0;
        $this->set('categories', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Category->exists($id)) {
            throw new NotFoundException(__('Invalid category'));
        }
        $options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
        $this->set('category', $this->Category->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $user = $this->UserAuth->getUser();
            $this->request->data['Category']['user_created'] = $user['User']['fullname'] . ' (' . $user['UserGroup']['name'] . ')';
            $this->Category->create();
            if ($this->Category->save($this->request->data)) {
                $this->Session->setFlash('Lưu thành công','flash_success');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Đã xảy ra lỗi, vui lòng thử lại','flash_error');
            }
        }

        $categories = $this->Category->find('list');
        $sub_title = 'Thêm danh mục bài viết';
        $this->set(compact('categories', 'sub_title'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Category->exists($id)) {
            throw new NotFoundException(__('Invalid category'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            $this->Category->id = $id;
            $user = $this->UserAuth->getUser();
            $this->request->data['Category']['user_created'] = $user['User']['fullname'] . ' (' . $user['UserGroup']['name'] . ')';
            if ($this->Category->save($this->request->data)) {
                $this->Session->setFlash('Lưu thành công','flash_success');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Đã xảy ra lỗi, vui lòng thử lại','flash_error');
            }
        } else {
            $options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
            $this->request->data = $this->Category->find('first', $options);
        }
        $categories = $this->Category->find('list');
        $sub_title = 'Chính sửa danh mục bài viết';
        $this->set(compact('categories', 'sub_title'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Category->id = $id;
        if (!$this->Category->exists()) {
            throw new NotFoundException(__('Invalid category'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Category->delete()) {
            $this->Session->setFlash('Xóa thành công','flash_success');
        } else {
            $this->Session->setFlash('Đã xảy ra lỗi, vui lòng thử lại','flash_error');
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function published($id, $status) {
        $this->Category->id = $id;
        $this->Category->saveField('published', $status);
        $this->redirect(array('action' => 'index'));
    }

}
