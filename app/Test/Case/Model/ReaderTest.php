<?php
App::uses('Reader', 'Model');

/**
 * Reader Test Case
 *
 */
class ReaderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.reader',
		'app.user',
		'app.department'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Reader = ClassRegistry::init('Reader');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Reader);

		parent::tearDown();
	}

}
