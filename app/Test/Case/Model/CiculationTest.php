<?php
App::uses('Ciculation', 'Model');

/**
 * Ciculation Test Case
 *
 */
class CiculationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ciculation',
		'app.book_serial',
		'app.book',
		'app.book_language',
		'app.book_type',
		'app.book_category',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ciculation = ClassRegistry::init('Ciculation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ciculation);

		parent::tearDown();
	}

}
