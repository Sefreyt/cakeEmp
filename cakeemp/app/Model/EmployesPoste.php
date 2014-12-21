<?php
App::uses('AppModel', 'Model');
/**
 * EmployesPoste Model
 *
 * @property Employe $Employe
 * @property Poste $Poste
 */
class EmployesPoste extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Employe' => array(
			'className' => 'Employe',
			'foreignKey' => 'employe_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Poste' => array(
			'className' => 'Poste',
			'foreignKey' => 'poste_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
