<?php

App::uses('AppModel', 'Model');

/**
 * Category Model
 *
 * @property Category $ParentCategory
 * @property Article $Article
 * @property Category $ChildCategory
 */
class Category extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'name';
    public $validate = array(
        'name' => array(
            'rule' => 'string',
            'required' => true,
            'allowEmpty' => false,
            'message' => 'Hãy nhập tên danh mục',
        ),
    );
    public $belongsTo = array(
        'ParentCategory' => array(
            'className' => 'Category',
            'foreignKey' => 'parent_id',
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
        'ChildCategory' => array(
            'className' => 'Category',
            'foreignKey' => 'parent_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'Article' => array(
            'className' => 'Article',
            'foreignKey' => 'category_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
    );

}
