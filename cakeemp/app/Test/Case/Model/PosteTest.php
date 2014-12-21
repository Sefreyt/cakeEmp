<?php
App::uses('Poste', 'Model');

/**
 * Poste Test Case
 *
 */
class PosteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.poste',
		'app.employe',
		'app.document',
		'app.user',
		'app.employes_poste'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Poste = ClassRegistry::init('Poste');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Poste);

		parent::tearDown();
	}

}
