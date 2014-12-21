<?php
App::uses('EmployesPoste', 'Model');

/**
 * EmployesPoste Test Case
 *
 */
class EmployesPosteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.employes_poste',
		'app.employe',
		'app.document',
		'app.user',
		'app.poste'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EmployesPoste = ClassRegistry::init('EmployesPoste');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EmployesPoste);

		parent::tearDown();
	}

}
