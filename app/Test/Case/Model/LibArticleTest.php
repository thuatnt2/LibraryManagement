<?php
App::uses('LibArticle', 'Model');

/**
 * LibArticle Test Case
 *
 */
class LibArticleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lib_article'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LibArticle = ClassRegistry::init('LibArticle');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LibArticle);

		parent::tearDown();
	}

}
