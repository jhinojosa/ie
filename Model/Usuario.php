<?php
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