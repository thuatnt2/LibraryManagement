<?php
/**
 * CiculationFixture
 *
 */
class CiculationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'chi tiết mượn trả sách'),
		'created' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => 'Ngày mượn'),
		'date_return' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => 'Ngày trã'),
		'librarian_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'comment' => 'Tên cán bộ thư viện thực hiện hoạt động này', 'charset' => 'utf8'),
		'extensions' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4),
		'reader' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'key' => 'index', 'collate' => 'utf8_general_ci', 'comment' => 'Mã bạn đọc mượn', 'charset' => 'utf8'),
		'book_serial_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => 'Quyển sách được mượn'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_lib_Ciculations_lib_Readers1_idx' => array('column' => 'reader', 'unique' => 0),
			'fk_lib_Ciculations_lib_SerialBooks1_idx' => array('column' => 'book_serial_id', 'unique' => 0)
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
			'id' => 1,
			'created' => '2013-10-06',
			'date_return' => '2013-10-06',
			'librarian_name' => 'Lorem ipsum dolor sit amet',
			'extensions' => 1,
			'reader' => 'Lorem ipsum dolor sit amet',
			'book_serial_id' => 1
		),
	);

}
