<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
if (Configure::read('debug') == 0):
	throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>
	<script type="text/javascript">
		$(document).ready( function(){
			$("#configurar-cuenta").load("datos_personales");
		});
	</script>
	<div class="container-view">
		<ul class="breadcrumb">
			<li>
				<a href="home">Portada</a><span class="divider">></span>
				<a href="#">Usuario</a><span class="divider">></span>
				<a href="#" class="active">Configurar cuenta</a>
			</li>
		</ul>
		<ul class="nav nav-tabs">
			<li class="active" id="datosPersonales">
				<a href="#">Datos personales</a>
			</li>
			<li id="datosAcademicos">
				<a href="#">Datos académicos</a>
			</li>
			<li id="cambiarPass">
				<a href="#">Cambiar contraseña</a>
			</li>
		</ul>
		<div id="configurar-cuenta"></div>
	</div>
