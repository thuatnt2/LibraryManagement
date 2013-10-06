<?php

/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
Router::connect('/', array('controller' => 'index', 'action' => 'index'));
Router::connect('/aticles', array('controller' => 'libArticles', 'action' => 'index'));
Router::connect('/index', array('controller' => 'index', 'action' => 'index'));
//front end router
/*
 * Routing for articles
 */
Router::connect('/tin-tuc', array('controller' => 'articles', 'action' => 'userIndex'));
Router::connect(
        '/tin-tuc/:id-:slug', 
        array('controller' => 'articles', 'action' => 'userView'), 
        array('pass' => array('id', 'slug'),'id' => '[0-9]+')
);
/*
 * Routing for book categories
 */
Router::connect('/danhmuc', array('controller' => 'BookCategories', 'action' => 'userIndex'));
Router::connect(
        '/danhmuc/:id', array('controller' => 'BookCategories', 'action' => 'userView'), array('id' => '[0-9]+')
);
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
//	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
require CAKE . 'Config' . DS . 'routes.php';
