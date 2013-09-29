<?php

App::uses('AppController', 'Controller');

/**
 * BookCategories Controller
 *
 * @property BookCategory $BookCategory
 * @property PaginatorComponent $Paginator
 */
class BookCategoriesController extends AppController {

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
        $this->BookCategory->recursive = 0;
        $title_for_layout = 'Danh mục sách';
        $this->set('bookCategories', $this->Paginator->paginate());
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
        if (!$this->BookCategory->exists($id)) {
            throw new NotFoundException(__('Invalid book category'));
        }
        $options = array('conditions' => array('BookCategory.' . $this->BookCategory->primaryKey => $id));
        $this->set('bookCategory', $this->BookCategory->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $user = $this->UserAuth->getUser();
            $this->request->data['BookCategory']['user_created'] = $user['User']['fullname'] . ' (' . $user['UserGroup']['name'] . ')';
            $this->BookCategory->create();
            if ($this->BookCategory->save($this->request->data)) {
                $this->Session->setFlash('Lưu thành công danh mục sách' . $this->request->data['BookCategory']['name'], 'flash_success');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
            }
        }

        $title_for_layout = 'Thêm mới danh mục sách';
        $sub_title = 'Thêm mới danh mục sách';
        $this->set(compact('sub_title', 'title_for_layout'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->BookCategory->exists($id)) {
            throw new NotFoundException(__('Invalid book category'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            $this->BookCategory->id = $id;
            if ($this->BookCategory->save($this->request->data)) {
                $this->Session->setFlash('Lưu thành công', 'flash_success');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flahs_error');
            }
        } else {
            $options = array('conditions' => array('BookCategory.' . $this->BookCategory->primaryKey => $id));
            $this->request->data = $this->BookCategory->find('first', $options);
            $title_for_layout = 'Chỉnh sửa danh mục sách';
            $sub_title = 'Chỉnh sửa danh mục sách';
            $this->set(compact('sub_title', 'title_for_layout'));
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
        $this->BookCategory->id = $id;
        if (!$this->BookCategory->exists()) {
            throw new NotFoundException(__('Invalid book category'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->BookCategory->delete()) {
            $this->Session->setFlash('Xóa thành công', 'flash_success');
        } else {
            $this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
        }
        return $this->redirect(array('action' => 'index'));
    }

}
