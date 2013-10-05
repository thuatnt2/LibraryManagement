<?php
App::uses('BookSerial', 'Model');

/**
 * BookSerial Test Case
 *
 */
class BookSerialTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.book_serial',
		'app.book',
		'app.book_language',
		'app.book_type',
		'app.book_category',
		'app.book_author',
		'app.ciculation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BookSerial = ClassRegistry::init('BookSerial');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BookSerial);

		parent::tearDown();
	}

}
