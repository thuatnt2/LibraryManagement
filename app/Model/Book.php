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
	public $borrow_type = array(
		1 => 'Được phép mượn',
		0 => 'Chỉ đọc tại chỗ',
		
	);
	public $borrow_status = array(
		1 => 'Đã sẵn sàng',
		2 => 'Đang xử lý',
	);
	public $teacher_only = array(
		1 => 'Tất cả',
		0 => 'Chỉ dành cho giáo viên',
	);
	public $belongsTo = array(
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
		'BookSerial' => array(
			'className' => 'BookSerial',
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
	public $validate = array(
		'title' => array(
			'notempty' => array(
				'rule' => 'notEmpty',
				'message' => 'Nhập tên tài liệu',
				'allowEmpty' => false,
				'required' => true,
			)
		),
		'authors' => array(
			'notempty' => array(
				'rule' => 'notEmpty',
				'message' => 'Nhập tác giả',
				'allowEmpty' => false,
				'required' => true,
			)
		),
		'publisher' => array(
			'notempty' => array(
				'rule' => 'notEmpty',
				'message' => 'Nhập tên nhà xuất bản',
				'allowEmpty' => false,
				'required' => true,
			)
		),
	);

}
