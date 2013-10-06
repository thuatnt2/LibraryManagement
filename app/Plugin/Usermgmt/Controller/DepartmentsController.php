<?php

App::uses('AppController', 'Controller');

/**
 * Departments Controller
 *
 * @property Department $Department
 * @property PaginatorComponent $Paginator
 */
class DepartmentsController extends AppController {

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
        $this->Department->recursive = 0;
        if($this->request->is('POST')){
            $faculty_id = $this->request->data['Department']['faculty_id'];
            if(!empty($faculty_id)){
                $departments = $this->Paginator->paginate(array('Department.faculty_id'=>$faculty_id));
            }
            else{
                $departments = $this->Paginator->paginate();
            }
            
        }
        else{
            $departments = $this->Paginator->paginate();
        }
        $faculties = $this->Department->Faculty->find('list',array('conditions'=>array('Faculty.is_active'=>1)));
        $this->set('departments', $departments);
        $this->set(compact('faculties'));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Department->exists($id)) {
            throw new NotFoundException(__('Invalid department'));
        }
        $options = array('conditions' => array('Department.' . $this->Department->primaryKey => $id));
        $this->set('department', $this->Department->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            //debug($this->data); exit();
            $this->request->data['Department']['is_active'] = 1;
            $this->Department->create();
            if ($this->Department->save($this->request->data)) {
                 $this->Session->setFlash('Lưu thành công','flash_success');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại','flash_error');
            }
        }
        $faculties = $this->Department->Faculty->find('list', array('conditions'=>array('Faculty.is_active' => 1)));
        $sub_title = __('Add Department');
        $this->set(compact('faculties', 'sub_title'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Department->exists($id)) {
            throw new NotFoundException(__('Invalid department'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            $this->Department->id = $id;
            if ($this->Department->save($this->request->data)) {
                 $this->Session->setFlash('Lưu thành công','flash_success');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại','flash_error');
            }
        } else {
            $options = array('conditions' => array('Department.' . $this->Department->primaryKey => $id));
            $this->request->data = $this->Department->find('first', $options);
        }
        $faculties = $this->Department->Faculty->find('list', array('conditions'=>array('Faculty.is_active' => 1)));
        $sub_title = __('Edit Department');
        $this->set(compact('faculties', 'sub_title'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Department->id = $id;
        if (!$this->Department->exists()) {
            throw new NotFoundException(__('Invalid department'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Department->delete()) {
             $this->Session->setFlash('Xóa thành công','flash_success');
        } else {
            $this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại','flash_error');
        }
        return $this->redirect(array('action' => 'index'));
    }
	
	public function loadDepartment(){
		$this->layout = null;
		if($this->request->is('POST')){
			$faculty_id = $this->request->data['faculty_id'];
			$this->Department->unbindModel(array('hasMany'=>array('Reader')));
			$departments = $this->Department->find('all', array('fields'=>array('id','name'),'conditions'=>array('Department.faculty_id'=> $faculty_id)));
			exit(json_encode($departments));
			
		}
	}

//    public function active($id, $status) {
//        $this->Department->id = $id;
//        $this->Department->saveField('actived', $status);
//        return $this->redirect(array('action' => 'index'));
//    }

}
