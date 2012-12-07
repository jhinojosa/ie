<?php
App::uses('AppModel', 'Model');
/**
 * Publicacione Model
 *
 * @property Articulo $Articulo
 * @property Comentario $Comentario
 * @property Evento $Evento
 * @property Memoria $Memoria
 * @property Proyecto $Proyecto
 * @property UsuariosEvento $UsuariosEvento
 * @property UsuariosProyecto $UsuariosProyecto
 */
class Publicacione extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'tipo' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => array('Ingrese un valor'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'titulo' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Ingrese un título',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'descripcion' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Ingrese una descripción',
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
		'Articulo' => array(
			'className' => 'Articulo',
			'foreignKey' => 'publicacione_id',
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
		'Comentario' => array(
			'className' => 'Comentario',
			'foreignKey' => 'publicacione_id',
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
		'Evento' => array(
			'className' => 'Evento',
			'foreignKey' => 'publicacione_id',
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
			'foreignKey' => 'publicacione_id',
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
		'Proyecto' => array(
			'className' => 'Proyecto',
			'foreignKey' => 'publicacione_id',
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
		'UsuariosEvento' => array(
			'className' => 'UsuariosEvento',
			'foreignKey' => 'publicacione_id',
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
		'UsuariosProyecto' => array(
			'className' => 'UsuariosProyecto',
			'foreignKey' => 'publicacione_id',
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

	/*public function getId($conditions) {
		$id = find('id', array('conditions' => $conditions));
		return $id;
	}*/

}
