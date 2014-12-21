<?php
App::uses('AppController', 'Controller');
/**
 * EmployesPostes Controller
 *
 * @property EmployesPoste $EmployesPoste
 * @property PaginatorComponent $Paginator
 */
class EmployesPostesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

}
