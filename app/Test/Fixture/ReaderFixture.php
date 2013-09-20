<?php
/**
 * ReaderFixture
 *
 */
class ReaderFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'cardBarcode' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'dateCreated' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => 'Ngày tạo thẻ bạn đọc'),
		'dateExpiry' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => 'Ngày hết hạn sử dụng'),
		'yearLearn' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'comment' => 'Khóa học', 'charset' => 'utf8'),
		'isActive' => array('type' => 'boolean', 'null' => false, 'default' => null, 'comment' => 'Tình trạng của thẻ (1 - lưu thông,0 - tạm khóa)'),
		'totalBorrow' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'department_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'cardBarcode', 'unique' => 1),
			'fk_lib_Reader_lib_User1_idx' => array('column' => 'user_id', 'unique' => 0),
			'fk_lib_Reader_tbl_Class1_idx' => array('column' => 'department_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'cardBarcode' => 'Lorem ipsum dolor sit amet',
			'dateCreated' => '2013-09-20',
			'dateExpiry' => '2013-09-20',
			'yearLearn' => 'Lorem ipsum dolor sit amet',
			'isActive' => 1,
			'totalBorrow' => 1,
			'user_id' => 1,
			'department_id' => 1
		),
	);

}
