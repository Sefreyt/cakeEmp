<?php
App::uses('Employe', 'Model');

/**
 * Employe Test Case
 *
 */
class EmployeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.employe',
		'app.document',
		'app.user',
		'app.poste',
		'app.employes_poste'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Employe = ClassRegistry::init('Employe');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Employe);

		parent::tearDown();
	}

}
