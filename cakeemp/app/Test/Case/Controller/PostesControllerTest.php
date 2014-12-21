<?php
App::uses('PostesController', 'Controller');

/**
 * PostesController Test Case
 *
 */
class PostesControllerTest extends ControllerTestCase {

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

}
