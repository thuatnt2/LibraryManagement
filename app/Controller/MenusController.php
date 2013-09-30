<?php

App::uses('AppController', 'Controller');

/**
 * Menus Controller
 *
 * @property Menu $Menu
 * @property PaginatorComponent $Paginator
 */
class MenusController extends AppController {

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
        $this->Menu->recursive = 0;
        $this->set('menus', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Menu->exists($id)) {
            throw new NotFoundException(__('Invalid menu'));
        }
        $options = array('conditions' => array('Menu.' . $this->Menu->primaryKey => $id));
        $this->set('menu', $this->Menu->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->request->data['Menu']['alias'] = $this->Common->vnit_change_title($this->request->data['Menu']['title']);
            $this->request->data = $this->get_link_menus($this->request->data);
            $this->request->data['Menu']['is_active'] = 1;
            $this->Menu->create();
            if ($this->Menu->save($this->request->data)) {
                $this->Session->setFlash('Lưu thành công menu', 'flash_success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
            }
        }
        $sub_title = 'Thêm menu';
        $title_for_layout = 'Thêm menu';
        $menus = $this->Menu->find('list');
        $this->set(compact('menus', 'sub_title', 'title_for_layout'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Menu->exists($id)) {
            throw new NotFoundException(__('Invalid menu'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            $this->request->data['Menu']['alias'] = $this->Common->vnit_change_title($this->request->data['Menu']['title']);
            $this->request->data = $this->get_link_menus($this->request->data);
            $this->Menu->id = $id;
            if ($this->Menu->save($this->request->data)) {
               $this->Session->setFlash('Lưu thành công menu', 'flash_success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
            }
        } else {
            $this->request->data = $this->Menu->read(null, $id);
        }
        $sub_title = 'Chỉnh sửa menu';
        $title_for_layout = 'Chỉnh sửa menu';
        $menus = $this->Menu->find('list');
        $this->set(compact('menus', 'sub_title', 'title_for_layout'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Menu->id = $id;
        if (!$this->Menu->exists()) {
            throw new NotFoundException(__('Invalid menu'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Menu->delete()) {
            $this->Session->setFlash('Xóa thành công menu','flash_success');
        } else {
            $this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại','flash_error');
        }
        return $this->redirect(array('action' => 'index'));
    }

    function select_article() {
        $this->layout = null;
        $this->loadModel('Article');
        $this->paginate = array(
            'Article' => array(
                'conditions' => array('Article.published' => 1),
                // 'limit' => 10,
                'recursive' => 0,
                'order' => 'Article.id DESC'
            )
        );
        $articles = $this->paginate('Article');
        $this->set(compact('articles'));
    }

    function select_category() {
        $this->layout = 'ajax';
        $this->loadModel('Category');
        $this->paginate = array(
            'Category' => array(
                'conditions' => array('Category.is_active' => 1),
                //'limit' => 10,
                'recursive' => 0,
                'order' => 'Category.id DESC'
            )
        );
        $categories = $this->paginate('Category');
        $this->set(compact('categories'));
    }

    function select_link() {
        $this->layout = 'ajax';
    }

    function get_link_menus($menu) {
        if ($menu['Menu']['controller'] == '' && $menu['Menu']['action'] == '') {
            // Có link do người dùng nhập vào
            //$my_link = '<a herf="/">'.$menu['Menu']['link'].'</a>';
            $my_link = $menu['Menu']['link'] == '/' ? '#' : $menu['Menu']['link'];
        } else {


            if ($menu['Menu']['ext']) {
                $my_link = Router::url(
                                array(
                            'controller' => $menu['Menu']['controller'],
                            'action' => $menu['Menu']['action'],
                            'id' => $menu['Menu']['ext'],
                            'slug' => Inflector::slug($menu['Menu']['alias'])
                                ), true
                );
            } else {
                $my_link = Router::url(
                                array(
                            'controller' => $menu['Menu']['controller'],
                            'action' => $menu['Menu']['action'],
                            'slug' => Inflector::slug($menu['Menu']['alias'])
                                ), true
                );
            }
        }
        //array_push($stack, "apple", "raspberry");
        //array_push($menu['Menu'],$my_link);
        //$arr_menu_link[] = $menu;
        // debug($my_link);
        $menu['Menu']['link'] = $my_link;
        return $menu;
    }
}
