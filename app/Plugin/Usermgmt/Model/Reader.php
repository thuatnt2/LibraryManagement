<?php
App::uses('AppModel', 'Model');
/**
 * Reader Model
 *
 * @property User $User
 * @property Department $Department
 */
class Reader extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'cardBarcode';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'cardBarcode';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'Usermgmt.User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Department' => array(
			'className' => 'Usermgmt.Department',
			'foreignKey' => 'department_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
