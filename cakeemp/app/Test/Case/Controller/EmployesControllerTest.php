<?php
App::uses('EmployesController', 'Controller');

/**
 * EmployesController Test Case
 *
 */
class EmployesControllerTest extends ControllerTestCase {

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

}
