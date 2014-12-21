<?php
App::uses('EmployesPostesController', 'Controller');

/**
 * EmployesPostesController Test Case
 *
 */
class EmployesPostesControllerTest extends ControllerTestCase {

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

}
