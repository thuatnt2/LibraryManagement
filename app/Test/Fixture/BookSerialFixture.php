<?php
/**
 * BookSerialFixture
 *
 */
class BookSerialFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'book_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => 'Số thứ tự cuốn sách'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'Ngày khởi đã khởi tạo'),
		'user_creater' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'comment' => 'Người khởi tạo', 'charset' => 'utf8'),
		'book_status' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'Tình trạng cuốn sách cụ thể'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'id' => 'Lorem ipsum dolor sit amet',
			'book_id' => 1,
			'created' => '2013-10-05 11:11:42',
			'user_creater' => 'Lorem ipsum dolor sit amet',
			'book_status' => 1,
			'modified' => '2013-10-05 11:11:42'
		),
	);

}
