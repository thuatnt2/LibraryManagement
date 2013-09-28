<?php

App::uses('AppController', 'Controller');

/**
 * Faculties Controller
 *
 * @property Faculty $Faculty
 * @property PaginatorComponent $Paginator
 */
class FacultiesController extends AppController {

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
        $this->Faculty->recursive = 0;
        $this->set('faculties', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Faculty->exists($id)) {
            throw new NotFoundException(__('Invalid faculty'));
        }
        $options = array('conditions' => array('Faculty.' . $this->Faculty->primaryKey => $id));
        $this->set('faculty', $this->Faculty->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->request->data['Faculty']['actived'] = 1;
            $this->Faculty->create();
            if ($this->Faculty->save($this->request->data)) {
                $this->Session->setFlash('Lưu thành công','flash_success');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại','flash_error');
            }
        }
        $this->set('sub_title', __('Add Faculty'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Faculty->exists($id)) {
            throw new NotFoundException(__('Invalid faculty'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            //debug($this->data); exit();
            $this->Faculty->id = $id;
            if ($this->Faculty->save($this->request->data)) {
                 $this->Session->setFlash('Lưu thành công','flash_success');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại','flash_error');
            }
        } else {
            $options = array('conditions' => array('Faculty.' . $this->Faculty->primaryKey => $id));
            $this->request->data = $this->Faculty->find('first', $options);
        }
        $this->set('sub_title', __('Edit Faculty'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Faculty->id = $id;
        if (!$this->Faculty->exists()) {
            throw new NotFoundException(__('Invalid faculty'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Faculty->delete()) {
             $this->Session->setFlash('Xóa thành công','flash_success');
        } else {
           $this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại','flash_error');
        }
        return $this->redirect(array('action' => 'index'));
    }
    
//    public function active($id, $status){
//        $this->Faculty->id = $id;
//        $this->Faculty->saveField('actived', $status);
//        return $this->redirect(array('action' => 'index'));
//    }

}
