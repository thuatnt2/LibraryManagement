<?php

App::uses('AppController', 'Controller');

/**
 * BookLanguages Controller
 *
 * @property BookLanguage $BookLanguage
 * @property PaginatorComponent $Paginator
 */
class BookLanguagesController extends AppController {

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
        $this->BookLanguage->recursive = 0;
        $title_for_layout = 'Ngôn ngữ';
        $this->set('bookLanguages', $this->Paginator->paginate());
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
        if (!$this->BookLanguage->exists($id)) {
            throw new NotFoundException(__('Invalid book language'));
        }
        $options = array('conditions' => array('BookLanguage.' . $this->BookLanguage->primaryKey => $id));
        $this->set('bookLanguage', $this->BookLanguage->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $user = $this->UserAuth->getUser();
            $this->request->data['BookLanguage']['user_created'] = $user['User']['fullname'] . ' (' . $user['UserGroup']['name'] . ')';
            $this->BookLanguage->create();
            if ($this->BookLanguage->save($this->request->data)) {
                $this->Session->setFlash('Luu thành công', 'flash_success');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
            }
        }
        
        $title_for_layout = 'Thêm ngôn tài liệu';
        $sub_title = 'Thêm ngôn ngữ tài liệu';
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
        if (!$this->BookLanguage->exists($id)) {
            throw new NotFoundException(__('Invalid book language'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            $this->BookLanguage->id = $id;
            if ($this->BookLanguage->save($this->request->data)) {
                $this->Session->setFlash('Lưu thành công', 'flash_success');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'error');
            }
        } else {
            $options = array('conditions' => array('BookLanguage.' . $this->BookLanguage->primaryKey => $id));
            $this->request->data = $this->BookLanguage->find('first', $options);
        }
        
        $title_for_layout = 'Chỉnh sửa ngôn ngữ sách';
        $sub_title = 'Chỉnh sửa ngữ sách';
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
        $this->BookLanguage->id = $id;
        if (!$this->BookLanguage->exists()) {
            throw new NotFoundException(__('Invalid book language'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->BookLanguage->delete()) {
            $this->Session->setFlash('Xóa thành công' , 'flash_success');
        } else {
            $this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
        }
        return $this->redirect(array('action' => 'index'));
    }

}
