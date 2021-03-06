<?php

App::uses('AppController', 'Controller');

/**
 * Books Controller
 *
 * @property Book $Book
 * @property PaginatorComponent $Paginator
 */
class BooksController extends AppController {

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
        if (!empty($this->request->query)) {
            $key_search = $this->request->query['key_search'];
            $conds = array('Book.title LIKE' => '%' . $key_search . '%');
            $this->paginate = array('conditions' => $conds, 'limit' => 2);
            $this->Book->recursive = 0;
            $this->set('books', $this->Paginator->paginate());
        }
        $this->Book->recursive = 0;
        $this->set('books', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($book_id = null) {
        $book = $this->Book->find('first',array('conditions' => array('Book.id' => $book_id)));
        if ($this->request->is('post')) {
            $this->request->data['BookSerial']['status'] = 1;
            $this->request->data['BookSerial']['book_id'] = $book_id;
            $this->loadModel('BookSerial');
            $this->BookSerial->create();
            if ($this->BookSerial->save($this->request->data)) {
                $this->Book->updateAll(array('Book.total' => 'Book.total+1'), array('Book.id' => $book_id));
                $this->Session->setFlash('Đã thêm thành công tài liệu có mã ' . $this->request->data['BookSerial']['barcode'] . ' vào đầu sách "' . $this->Book->data['Book']['title'] . '"', 'flash_success');
                return $this->redirect(array('action' => 'view', $book_id));
            } else {
                $this->Session->setFlash('Đã xảy ra lỗi, vui lòng thử lại', 'flash_error');
            }
        }
        $this->log($book, 'debug');
        $sub_title = 'Thêm sách';
        $this->set(compact('book', 'sub_title'));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        $this->loadModel('Author');
        $this->loadModel('Publisher');
        $this->loadModel('BookLanguage');
        $authorsList = $this->Author->find('list');
        $publisherList = $this->Publisher->find('list');
        $bookLanguagesList = $this->BookLanguage->find('list');

        $publishers = array();
        foreach ($publisherList as $k => $v) {
            $publishers[] = $v;
        }
        $authors = array();
        foreach ($authorsList as $k => $v) {
            $authors[] = $v;
        }
        $languages = array();
        foreach ($bookLanguagesList as $k => $v) {
            $languages[] = $v;
        }

        if ($this->request->is('post')) {

            //remove the last comma , 
            if (substr($this->request->data['Book']['authors'], -1) == ',') {
                $this->request->data['Book']['authors'] = substr($this->request->data['Book']['authors'], strlen($this->request->data['Book']['authors']) - 1);
            }
            $this->request->data['Book']['total'] = 0;

            //debug($this->request->data); exit();
            $this->Book->create();
            if ($this->Book->save($this->request->data)) {
                $this->saveAuthor($authors, $this->request->data['Book']['authors']);
                $this->savePublisher($publishers, $this->request->data['Book']['publisher']);
                $this->Session->setFlash('Đã lưu thành công', 'flash_success');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
            }
        }

        $bookTypes = $this->Book->BookType->find('list');
        $bookCategories = $this->Book->BookCategory->find('list');
        $borrow_type = $this->Book->borrow_type;
        $borrow_status = $this->Book->borrow_status;
        $teacher_only = $this->Book->teacher_only;
        $sub_title = 'Biên mục tài liệu';
        $this->set(compact('languages', 'bookTypes', 'bookCategories', 'authors', 'publishers', 'borrow_type', 'borrow_status', 'teacher_only', 'sub_title'));
    }

    public function saveAuthor($authors = array(), $str_author = '') {
        $author_input = explode(',', $str_author);
        $author_input = array_map('trim', $author_input);
        $diff = array_diff($author_input, $authors);
        if (!empty($diff)) {
            $this->loadModel('Author');
            $data = array();
            foreach ($diff as $v) {
                $data['Author']['name'] = $v;
                $this->Author->create();
                $this->Author->save($data);
            }
        }
    }

    public function savePublisher($publisher = array(), $str_publishers = '') {
        $publisher_input = explode(',', $str_publishers);
        $publisher_input = array_map('trim', $publisher_input);
        $diff = array_diff($publisher_input, $publisher);
        if (!empty($diff)) {
            $this->loadModel('Publisher');
            $data = array();
            foreach ($diff as $v) {
                $data['Publisher']['name'] = $v;
                $this->Author->create();
                $this->Author->save($data);
            }
        }
    }

    public function saveLanguage($language = array(), $str_language = '') {
        $language_input = explode(',', $str_language);
        $language_input = array_map('trim', $language_input);
        $diff = array_diff($language_input, $language);
        if (!empty($diff)) {
            $this->loadModel('BookLanguage');
            $data = array();
            foreach ($diff as $v) {
                $data['Language']['name'] = $v;
                $this->Author->create();
                $this->Author->save($data);
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
        $this->loadModel('Author');
        $this->loadModel('Publisher');
        $this->loadModel('BookLanguage');
        $authorsList = $this->Author->find('list');
        $publisherList = $this->Publisher->find('list');

        $publishers = array();
        foreach ($publisherList as $k => $v) {
            $publishers[] = $v;
        }
        $authors = array();
        foreach ($authorsList as $k => $v) {
            $authors[] = $v;
        }
        if (!$this->Book->exists($id)) {
            throw new NotFoundException(__('Invalid book'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Book->save($this->request->data)) {
                $this->Session->setFlash(__('The book has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The book could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Book.' . $this->Book->primaryKey => $id));
            $this->request->data = $this->Book->find('first', $options);
        }
        $bookLanguages = $this->BookLanguage->find('list');
        $bookTypes = $this->Book->BookType->find('list');
        $bookCategories = $this->Book->BookCategory->find('list');
        $borrow_type = $this->Book->borrow_type;
        $borrow_status = $this->Book->borrow_status;
        $teacher_only = $this->Book->teacher_only;
        $sub_title = 'Thay đổi thông tin sách';
        $this->set(compact('sub_title','bookLanguages', 'bookTypes', 'bookCategories', 'borrow_type', 'authors', 'publishers', 'borrow_status', 'teacher_only'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Book->id = $id;
        if (!$this->Book->exists()) {
            throw new NotFoundException(__('Invalid book'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Book->delete()) {
            $this->Session->setFlash(__('The book has been deleted.'));
        } else {
            $this->Session->setFlash(__('The book could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function userView($id = null) {
        $this->layout = 'new';


        if ($this->Book->exists($id)) {
            $book = $this->Book->find('first', array('conditions' => array('Book.id' => $id)));
            $other_books = $this->Book->find('all', array(
            'limit' => 4,
            'conditions' => array('Book.book_category_id' => $book['Book']['book_category_id'],"Book.id <> ".$book['Book']['id'] ),
            ));

            $this->set(compact('book','other_books'));
        }
    }

}
