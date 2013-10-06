<?php
App::uses('CiculationPolicy', 'Model');

/**
 * CiculationPolicy Test Case
 *
 */
class CiculationPolicyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ciculation_policy'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CiculationPolicy = ClassRegistry::init('CiculationPolicy');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CiculationPolicy);

		parent::tearDown();
	}

}
