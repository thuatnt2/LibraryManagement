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
            $this->request->data['BookCategory']['is_active'] = 1;
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

        $title_for_layout = 'Thêm mới danh tài liệu';
        $sub_title = 'Thêm mới danh tài liệu';
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

    public function getBookCategories() {
        return $book_categories = $this->BookCategory->find('list');
    }

    public function userIndex() {
        $this->layout = 'new';
        $title_for_layout = 'aaaa';
        $this->set(compact('title_for_layout'));
    }

    public function userView() {
        $this->log($this->request->params, 'debug');
        $this->layout = 'new';
        $bookCategory = $this->BookCategory->find('first', array('conditions' => array(
                'BookCategory.id' => $this->request->params['id'])));
        $title_for_layout = 'Danh mục ' . $bookCategory['BookCategory']['name'];
        $this->loadModel('Book');
        $this->paginate = array(
                'conditions' => array(
                    'Book.book_category_id' => $bookCategory['BookCategory']['id']
                ),
                'recursive' => -1,
                'limit' => 2
           
        );

        $books = $this->Paginator->paginate('Book');
//        $this->log($books, 'debug');

        $this->set('books', $books);
        $this->set('title_for_layout', $title_for_layout);
        $this->set('bookCategory', $bookCategory);
    }

    public function userSearch() {
        $category_id = $this->request->query['category_id'];
        $keyword = $this->request->query['keyword'];
        $this->loadModel('Book');
        $options = array(
            'conditions' => array(
                'Book.book_category_id' => $category_id,
                'Book.title LIKE' => '%' . $keyword . '%'
            )
        );
        $this->Book->recursive = -1;
        $result = $this->Book->find('all', $options);
        $books = array();
        foreach ($result as $value) {
            array_push($books, $value['Book']);
        }
        $this->set('books', $books);
        $this->set('keyword', $keyword);
        $this->log($books, 'debug');
    }

}
