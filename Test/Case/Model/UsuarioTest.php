<?php
App::uses('Usuario', 'Model');

/**
 * Usuario Test Case
 *
 */
class UsuarioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.usuario',
		'app.antecedentes_academico',
		'app.comentarios_interno',
		'app.logro',
		'app.memoria',
		'app.publicacione',
		'app.articulo',
		'app.comentario',
		'app.evento',
		'app.usuarios_evento',
		'app.proyecto',
		'app.estado',
		'app.usuarios_proyecto'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Usuario = ClassRegistry::init('Usuario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Usuario);

		parent::tearDown();
	}

}
