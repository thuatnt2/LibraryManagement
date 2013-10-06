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
	public $primaryKey = 'id';
	
//	var $validate = array(
//		'username' => 'checkUsername',
//	);

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'cardBarcode';
	
	
	
//	public  function checkUsername($data){
//		
//		$reader = $this->User->find('all');
//		debug($reader);
//		debug($data);exit();
//	}


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
	
	
	public function validateReader() {
		exit('validate reader');
		$validate1 = array(
			'is_teacher' => array(
				'mustNotEmpty' => array(
					'rule' => 'notEmpty',
					'message' => 'Bạn chưa chọn chức vụ cho bạn đọc',
					'last' => true)
			),
			'faculty_id' => array(
				'mustNotEmpty' => array(
					'rule' => 'notEmpty',
					'message' => 'Bạn chưa chọn khoa')
			),
			'department_id' => array(
				'mustNotEmpty' => array(
					'rule' => 'notEmpty',
					'message' => 'Bạn chưa chọn lớp')
			),
		);
		$this->validate = $validate1;
		return $this->validates();
	}
}
