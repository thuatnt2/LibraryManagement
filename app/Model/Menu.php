<?php

App::uses('AppModel', 'Model');

/**
 * Menu Model
 *
 * @property Menu $ParentMenu
 * @property Menu $ChildMenu
 */
class Menu extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'title';

    public $validate = array(
        'title' => array(
            'rule' => 'string',
            'required' => true,
            'allowEmpty' => false,
            'message' => 'Hãy nhập tên menu'
        )
    );
    
    public $columns = array(
        'title' => 'Tiêu đề',
        'created' => 'Ngày tạo',
        
    );


    public $belongsTo = array(
        'ParentMenu' => array(
            'className' => 'Menu',
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
        'ChildMenu' => array(
            'className' => 'Menu',
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
        )
    );

}
