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
	<div class="container-view">
		<ul class="breadcrumb">
			<li>
				<a href="home">Portada</a><span class="divider">></span>
				<a href="#">Usuario</a><span class="divider">></span>
				<a href="#" class="active">Nuevo usuario</a>
			</li>
		</ul>
		<h1 class="title-view">Nuevo usuario</h1>
		<div class="line"></div>
		<form id="newPublicationForm" class="form-horizontal" method="post" action="/users/add">
			<div class="control-group">
				<label class="control-label">Nombre</label>
				<div class="controls">
					<input type="text" name="_method" placeholder="Ej. Juan">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Apellidos</label>
				<div class="controls">
					<input type="text" name="_method" placeholder="Ej. Perez Rodriguez">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Email</label>
				<div class="controls">
					<input type="text" name="_method" placeholder="Ej. juan.perez@gmail.com">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Tipo miembro</label>
				<div class="controls">
					<select>
						<option></option>
						<option>Académico</option>
						<option>Alumno</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Nombre de usuario</label>
				<div class="controls">
					<input type="text" placeholder="Ej. juan.perez">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Contraseña</label>
				<div class="controls">
					<input type="password" placeholder="Contraseña">
				</div>
			</div>
			<div id="btnSubmit">
				<button class="btn btn-primary" type="submit">Enviar</button>
				<button class="btn" type="button">Cancelar</button>
			</div>
		</form>
	</div>
