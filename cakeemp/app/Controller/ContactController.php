<?php
App::uses('AppController', 'Controller');
/**
 * Postes Controller
 *
 * @property Poste $Poste
 * @property PaginatorComponent $Paginator
 */
class ContactController extends AppController {
 
/**
 * Controller name
 *
 * @var string
 */
        public $name = 'Contact';
 
/**
 * Default helper
 *
 * @var array
 */
        public $helpers = array('Html', 'Session');
 
/**
 * This controller does not use a model
 *
 * @var array
 */
        public $uses = array();
 
     
 
        public function index()
        {
        }
}