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
    var $uses = array('Article','BookType');

    public function index() {
        $article = $this->Article->read(null, 5);
        $this->set('article', $article);
        $book_types = $this->BookType->find('all');
        $this->set('book_types',$book_types);
    }
    
//    public function _logger(Object $msg){
//        $this->log($msg,'debug');
//    }
}

?>
