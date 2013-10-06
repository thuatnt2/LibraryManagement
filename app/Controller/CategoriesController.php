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
        //$columns = $this->Category->columns;
        //debug($this->Paginator->paginate());exit();
        $this->paginate = array('limit' => 20);
        $title_for_layout = 'Danh mục bài viết';
        $this->set('categories', $this->Paginator->paginate());
        $this->set('title_for_layout', $title_for_layout);
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
            $this->request->data['Category']['alias'] = $this->Common->vnit_change_title($this->request->data['Category']['name']);
            $this->request->data['Category']['is_active'] = 1;
            $this->Category->create();
            if ($this->Category->save($this->request->data)) {
                $this->Session->setFlash('Lưu thành công', 'flash_success');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Đã xảy ra lỗi, vui lòng thử lại', 'flash_error');
            }
        }

        $parentCategories = $this->Category->ParentCategory->find('list');
        $sub_title = 'Thêm danh mục';
        $title_for_layout = 'Thêm danh mục';
        $this->set(compact('parentCategories', 'sub_title', 'title_for_layout'));
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
            $this->request->data['Category']['alias'] = $this->Common->vnit_change_title($this->request->data['Category']['name']);
            if ($this->Category->save($this->request->data)) {
                $this->Session->setFlash('Lưu thành công', 'flash_success');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Đã xảy ra lỗi, vui lòng thử lại', 'flash_error');
            }
        } else {
            $this->request->data = $this->Category->read(null, $id);
        }
        $parentCategories = $this->Category->ParentCategory->find('list');
        $sub_title = 'Chính sửa danh mục';
        $title_for_layout = 'Chính sửa danh mục';
        $this->set(compact('parentCategories', 'sub_title', 'title_for_layout'));
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
            $this->Session->setFlash('Xóa thành công', 'flash_success');
        } else {
            $this->Session->setFlash('Đã xảy ra lỗi, vui lòng thử lại', 'flash_error');
        }
        return $this->redirect(array('action' => 'index'));
    }



}
