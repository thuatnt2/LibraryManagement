<?php

App::uses('AppModel', 'Model');

/**
 * Book Model
 *
 * @property BookLanguage $BookLanguage
 * @property BookType $BookType
 * @property BookCategory $BookCategory
 * @property BookAuthor $BookAuthor
 */
class Book extends AppModel {

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
        'BookLanguage' => array(
            'className' => 'BookLanguage',
            'foreignKey' => 'book_language_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'BookType' => array(
            'className' => 'BookType',
            'foreignKey' => 'book_type_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'BookCategory' => array(
            'className' => 'BookCategory',
            'foreignKey' => 'book_category_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'BookAuthor' => array(
            'className' => 'BookAuthor',
            'foreignKey' => 'book_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );

}
