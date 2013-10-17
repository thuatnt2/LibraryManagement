<?php

/**
 * Index Controller
 *
 * @property LibArticle $LibArticle
 * @property PaginatorComponent $Paginator
 */
App::uses('AppController', 'Controller');

class IndexController extends AppController {

    /**
     * index method
     *
     * @return void
     */
//    var $layout = 'Frontend/frontend';
    var $layout = 'new';
    var $uses = array('Article', 'BookCategory', 'Book');

    public function index() {
        $article = $this->Article->read(null, 5);
        $this->set('title_for_layout','Thư viện - Trang chủ');
        $books = $this->Book->find('all', array('limit' => 4));
        $this->set(compact('article', 'books'));
    }

}

?>
