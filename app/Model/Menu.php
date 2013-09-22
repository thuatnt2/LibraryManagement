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

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    /**
     * hasMany associations
     *
     * @var array
     */
}
