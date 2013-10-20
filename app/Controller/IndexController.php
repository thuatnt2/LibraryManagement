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
        $options = array(
            'recursive' => -1,
            'limit' => 5,
            'order' => array('Article.created desc')
        );
        $articles = $this->Article->find('all', $options);
        $this->set('title_for_layout', 'Thư viện - Trang chủ');
        $books = $this->Book->find('all', array('limit' => 5));
        $this->set(compact('articles', 'books'));
    }
}
?>
