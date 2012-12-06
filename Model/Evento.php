<?php
App::uses('AppModel', 'Model');
/**
 * Evento Model
 *
 * @property Publicacione $Publicacione
 * @property Usuario $Usuario
 */
class Evento extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'publicacione_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'publicacione_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Error: Formato de ID inválido. Por favor ingrese un valor numerico',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Error: ID necesario. Por favor indique un ID válido.'
			),
		),
		'tipo' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fecha' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Error: Formato de fecha inválido. Por favor ingrese un valor del tipo DD-MM-AAAA.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Error: Fecha necesaria. Por favor indique una fecha.',
			),
		),
		'hora' => array(
			'time' => array(
				'rule' => array('time'),
				'message' => 'Error: Formato de hora inválido. Por favor ingrese una hora del tipo HH:MM:SS.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notempty' => array(
				'rule' => 'Error: Hora necesaria. Por favor ingrese una hora.',
			),
		),
		'direccion' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Error: Dirección necesaria. Por favor ingrese una dirección.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Publicacione' => array(
			'className' => 'Publicacione',
			'foreignKey' => 'publicacione_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Usuario' => array(
			'className' => 'Usuario',
			'joinTable' => 'usuarios_eventos',
			'foreignKey' => 'evento_id',
			'associationForeignKey' => 'usuario_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
