<?php

App::uses('AppModel', 'Model');

/**
 * BookSerial Model
 *
 * @property Ciculation $Ciculation
 * @property Book $Book
 */
class BookSerial extends AppModel {

	/**
	 * Display field
	 *
	 * @var string
	 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

	/**
	 * hasOne associations
	 *
	 * @var array
	 */
//	public $hasOne = array(
//		'Ciculation' => array(
//			'className' => 'Ciculation',
//			'foreignKey' => 'book_serial_id',
//			'conditions' => '',
//			'fields' => '',
//			'order' => ''
//		)
//	);

	/**
	 * belongsTo associations
	 *
	 * @var array
	 */
	public $belongsTo = array(
		'Book' => array(
			'className' => 'Book',
			'foreignKey' => 'book_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	public $validate = array(
		'barcode' => array(
			'mustNotEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Bạn chưa nhập mã tài liệu',
				'last' => true),
			'mustUnique' => array(
				'rule' => 'isUnique',
				'message' => 'Mã số tài liệu này đã tồn tại',
				'last' => true),
			'mustBeLonger' => array(
				'rule' => array('minLength', 6),
				'message' => 'Mã số tài liệu phải ít nhất 6 kí tự',
				'last' => true),
		),
	);

}

