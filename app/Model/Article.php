<?php

App::uses('AppModel', 'Model');

/**
 * Article Model
 *
 * @property Category $Category
 */
class Article extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'title';

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Category' => array(
            'className' => 'Category',
            'foreignKey' => 'category_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    public function recent($limit = 5) {
        $options = array( 'order' => 'Article.created DESC', 'limit' => $limit);
        $articles = $this->find('all', $options);
        return $articles;
    }
}
