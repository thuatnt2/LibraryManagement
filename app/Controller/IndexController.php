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
    var $uses = array('Article');

    public function index() {
        $article = $this->Article->read(null, 5);
        $this->set('article', $article);
    }
}

?>
