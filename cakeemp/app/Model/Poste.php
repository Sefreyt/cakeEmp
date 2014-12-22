<?php
App::uses('AppModel', 'Model');
/**
 * Poste Model
 *
 * @property Employe $Employe
 */
class Poste extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'poste';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'poste' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Employe' => array(
			'className' => 'Employe',
			'joinTable' => 'employes_postes',
			'foreignKey' => 'poste_id',
			'associationForeignKey' => 'employe_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);
        
        public function getPosteNames ($term = null) {
      if(!empty($term)) {
        $postes = $this->find('list', array(
          'conditions' => array(
            'name LIKE' => trim($term) . '%'
          )
        ));
        return $postes;
      }
      return false;
    }
}
