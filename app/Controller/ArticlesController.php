<?php

App::uses('AppController', 'Controller');

/**
 * Articles Controller
 *
 * @property Article $Article
 * @property PaginatorComponent $Paginator
 */
class ArticlesController extends AppController {

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
        $this->Article->recursive = 0;
        $this->paginate = array('order' => 'Article.created DESC');
        $this->set('articles', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Article->exists($id)) {
            throw new NotFoundException(__('Invalid article'));
        }
        $options = array('conditions' => array('Article.' . $this->Article->primaryKey => $id));
        $this->set('article', $this->Article->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->request->data['Article']['published'] = 1;
            $this->Article->create();
            if ($this->Article->save($this->request->data)) {
                $this->Session->setFlash('Lưu bài viết thành công', 'flash_success');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
            }
        }
        $categories = $this->Article->Category->find('list');
        $sub_title = 'Thêm bài viết';
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
        if (!$this->Article->exists($id)) {
            throw new NotFoundException(__('Invalid article'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            $this->Article->id = $id;
            if ($this->Article->save($this->request->data)) {
                $this->Session->setFlash('Lưu bài viết thành công', 'flash_success');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
            }
        } else {
            $options = array('conditions' => array('Article.' . $this->Article->primaryKey => $id));
            $this->request->data = $this->Article->find('first', $options);
        }
        $categories = $this->Article->Category->find('list');
        $sub_title = 'Chỉnh sửa bài viết';
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
        $this->Article->id = $id;
        if (!$this->Article->exists()) {
            throw new NotFoundException(__('Invalid article'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Article->delete()) {
            $this->Session->setFlash('Xóa bài viết thành công', 'flash_success');
        } else {
            $this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function pulished($id, $status) {
        $this->Article->id = $id;
        $this->Article->saveField('published', $status);
        $this->redirect(array('action' => 'index'));
    }

    public function userView() {
         $this->set('title_for_layout','Thư viện - Tin tức');
        $this->layout = 'new';
        #FIXME, check record not found
        $article =  $this->Article->read(null, $this->request->params['id']);
        $this->set('article',$article );
    }

    public function userIndex() {
        $this->set('title_for_layout','Thư viện - Tin tức');
        $this->layout = 'new';
        //Show 3 lastest articles
        $articles = $this->Article->recent(3);
        $this->set('articles', $articles);
    }

}
