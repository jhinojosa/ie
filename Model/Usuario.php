<?php
<<<<<<< HEAD
class Usuario extends AppModel {
	public $name = 'Usuario';
	public $displayField = 'nombre';

	public $validate = array(
			'nombre1' => array(
				'nombre distinto vacio' => array(
					'rule' => 'notEmpty',
					'allowEmpty' => false,
					'required' => true,
					'message' => 'Por favor, ingresa su nombre.'
					)
				),
			'nombre2' => array(
				'rule' => 'allowEmpty'
				),
			'apellido1' => array(
				'apellido distinto vacio' => array(
					'rule' => 'notEmpty',
					'allowEmpty' => false,
					'required' => true,
					'message' => 'Por favor, ingrese su apellido.'
					)
				),
			'apellido2' => array(
				'rule' => 'allowEmpty'
				),
			'edad' => array(
				'edad distinta vacio' => array(
					'rule' => 'notEmpty',
					'allowEmpty' => false,
					'required' => true,
					'message' => 'Por favor, ingrese su edad.'
					)
				),
			'telefono1' => array(
				'telefono distinto vacio' => array(
					'rule' => 'notEmpty',
					'allowEmpty' => false,
					'required' => true,
					'message' => 'Por favor, ingrese su teléfono.'
					)
				),
			'telefono2' => array(
				'rule' => 'allowEmpty'
				),
			'email' => array(
				'valid email' => array(
					'rule' => array('email', true),
					'message' => 'Por favor, ingrese un email válido.'
					)
				),
			'tipo' => array(
				'requerido' => array(
					'rule' => 'required',
					'required' => true,
					'message' => 'Ingrese un tipo de usuario, por favor.'
					)
				),
			'cargo' => array(
				'cargo requerido' => array(
					'rule' => 'required',
					'required' => true,
					'message' => 'Ingrese un cargo, por favor.'
					)
				)
		);
}
=======
App::uses('AppModel', 'Model');
/**
 * Usuario Model
 *
 * @property AntecedentesAcademico $AntecedentesAcademico
 * @property ComentariosInterno $ComentariosInterno
 * @property Logro $Logro
 * @property Memoria $Memoria
 * @property Evento $Evento
 * @property Proyecto $Proyecto
 */
class Usuario extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nombre1' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'apellido1' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'edad' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'telefono1' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tipo' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cargo' => array(
			'notempty' => array(
				'rule' => array('notempty'),
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'AntecedentesAcademico' => array(
			'className' => 'AntecedentesAcademico',
			'foreignKey' => 'usuario_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'ComentariosInterno' => array(
			'className' => 'ComentariosInterno',
			'foreignKey' => 'usuario_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Logro' => array(
			'className' => 'Logro',
			'foreignKey' => 'usuario_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Memoria' => array(
			'className' => 'Memoria',
			'foreignKey' => 'usuario_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Evento' => array(
			'className' => 'Evento',
			'joinTable' => 'usuarios_eventos',
			'foreignKey' => 'usuario_id',
			'associationForeignKey' => 'evento_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Proyecto' => array(
			'className' => 'Proyecto',
			'joinTable' => 'usuarios_proyectos',
			'foreignKey' => 'usuario_id',
			'associationForeignKey' => 'proyecto_id',
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
>>>>>>> e352ef44a9efcd0665b8bdc4d48c9a3ac1cc052e
