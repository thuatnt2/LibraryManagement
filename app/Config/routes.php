<?php

/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
//admin router
Router::connect('/dashboard', array('controller' => 'admin', 'action' => 'dashboard'));

Router::connect('/', array('controller' => 'index', 'action' => 'index'));
//Router::connect('/aticles1', array('controller' => 'libArticles', 'action' => 'index'));
Router::connect('/index', array('controller' => 'index', 'action' => 'index'));
//front end router
/*
 * Routing for articles
 */
Router::connect('/bai-viet', array('controller' => 'articles', 'action' => 'index'));
Router::connect('/dang-bai-viet', array('controller' => 'articles', 'action' => 'add'));
Router::connect('/tin-tuc', array('controller' => 'articles', 'action' => 'userIndex'));
Router::connect(
        '/tin-tuc/:id-:slug', array('controller' => 'articles', 'action' => 'userView'), array('pass' => array('id', 'slug'), 'id' => '[0-9]+')
);
/*
 * Routing for book categories
 */
Router::connect('/danh-muc', array('controller' => 'bookCategories', 'action' => 'userIndex'));
Router::connect(
        '/danh-muc/:id-:slug', array('controller' => 'bookCategories', 'action' => 'userView'), array('pass' => array('id', 'slug'),'id' => '[0-9]+')
);
Router::connect(
        '/the-loai/:id-:slug', array('controller' => 'bookTypes', 'action' => 'userView'), array('pass' => array('id', 'slug'),'id' => '[0-9]+')
);
Router::connect(
        '/tai-lieu/:id', array('controller' => 'books', 'action' => 'userView'), array('pass' => array('id'),'id' => '[0-9]+')
);
Router::connect('/tim-kiem', array('controller' => 'bookSearch', 'action' => 'userIndex'));


/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
//	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
/**
 * Router for Ciculation
 */
Router::connect('/muon-tra-tai-lieu', array('controller' => 'ciculations', 'action' => 'bookBorrowed'));
Router::connect('/lich-su-luu-thong', array('controller' => 'admin', 'action' => 'logs'));
Router::connect('/booksCiculation', array('controller' => 'ciculations', 'action' => 'booksCiculation'));
Router::connect('/bien-muc', array('controller' => 'books', 'action' => 'add'));
Router::connect('/them-sach/*', array('controller' => 'books', 'action' => 'view'));
Router::connect('/tai-lieu', array('controller' => 'books', 'action' => 'index'));

/**
 * $these routers are severed for ajax load . If you change , I'll kill you. 
 */
Router::connect('/loadLogs', array('controller' => 'admin', 'action' => 'loadLogs'));
Router::connect('/getCiculation', array('controller' => 'ciculations', 'action' => 'getCiculation'));
Router::connect('/getBook', array('controller' => 'bookSerials', 'action' => 'getBook'));
Router::connect('/borrowBook', array('controller' => 'ciculations', 'action' => 'borrowBook'));
Router::connect('/returnBook', array('controller' => 'ciculations', 'action' => 'returnBook'));
Router::connect('/renewBook', array('controller' => 'ciculations', 'action' => 'renewBook'));
Router::connect('/deleteBookSerial', array('controller' => 'bookSerials', 'action' => 'delete'));
CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
require CAKE . 'Config' . DS . 'routes.php';
