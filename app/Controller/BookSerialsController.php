<?php

App::uses('AppController', 'Controller');

/**
 * BookSerials Controller
 *
 * @property BookSerial $BookSerial
 * @property PaginatorComponent $Paginator
 */
class BookSerialsController extends AppController {

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
        $this->BookSerial->recursive = 0;
        $this->set('bookSerials', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->BookSerial->exists($id)) {
            throw new NotFoundException(__('Invalid book serial'));
        }
        $options = array('conditions' => array('BookSerial.' . $this->BookSerial->primaryKey => $id));
        $this->set('bookSerial', $this->BookSerial->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add($book_id) {
        $this->loadModel('Book');
        $book = $this->Book->read('title, total, user_created', $book_id);
        $sub_title = 'Thêm sách';
        $this->set(compact('book', 'sub_title'));


        if ($this->request->is('post')) {
            $this->request->data['BookSerial']['status'] = 0;
            $this->request->data['BookSerial']['book_id'] = $book_id;
            $this->BookSerial->create();
            if ($this->BookSerial->save($this->request->data)) {
                $this->Session->setFlash('Đã thêm thành công', 'flash_success');
                return $this->redirect(array('action' => 'add', $book_id));
            } else {
                $this->Session->setFlash('Đã xảy ra lỗi, vui lòng thử lại', 'flash_error');
            }
        }
        //$books = $this->BookSerial->Book->find('list');
        //$this->set(compact('books'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->BookSerial->exists($id)) {
            throw new NotFoundException(__('Invalid book serial'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->BookSerial->save($this->request->data)) {
                $this->Session->setFlash(__('The book serial has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The book serial could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('BookSerial.' . $this->BookSerial->primaryKey => $id));
            $this->request->data = $this->BookSerial->find('first', $options);
        }
        $books = $this->BookSerial->Book->find('list');
        $this->set(compact('books'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete() {
        $this->autoRender = false;
        if ($this->request->is('POST')) {
            $result = array();
            $book_serial_id = $this->request->data['bookSerialId'];
            $this->BookSerial->id = $book_serial_id;
            if (!$this->BookSerial->exists()) {
                $result['status'] = 0;
                $result['messate'] = 'Mã tài liệu không tồn tại';
            } else {
                $this->BookSerial->id = $book_serial_id;
                if ($this->BookSerial->delete()) {
                    $result['status'] = 1;
                    $result['messate'] = 'Xóa thành công tài liệu';
                } else {
                    $result['status'] = 0;
                    $result['messate'] = 'Đã có lỗi xảy ra, vui lòng thử lại';
                }
            }
            $this->log($result, 'debug');
            return json_encode($result);
        }




        return $this->redirect(array('controller' => 'books', 'action' => 'view', $book_id));
    }

    public function getBook() {
        $this->layout = null;
        if ($this->request->is('POST')) {
            $book_code = $this->request->data['bookCode'];
            $book_serial = $this->BookSerial->findByBarcode($book_code);
            exit(json_encode($book_serial));
        }
        $this->autoRender = false;
    }

}
