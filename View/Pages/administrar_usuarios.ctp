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
				<a href="#">Usuarios</a><span class="divider">></span>
				<a href="#" class="active">Administrar usuarios</a>
			</li>
		</ul>
		<h1 class="title-view">Administrar usuarios</h1>
		<div class="line"></div>
		<table class="table table-hover">
			<thead>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Username</th>
				<th>Rol</th>
				<th>Miembro</th>
				<th>Administrar</th>
			</thead>
			<tbody>
				<tr>
					<td>Julio</td>
					<td>Hinojosa Galindo</td>
					<td><a href="#">julio.hinojosa</a></td>
					<td>Administrador</td>
					<td>Alumno</td>
					<td>    
						<div class="btn-group">
							<i class="icon-cog dropdown-toggle" data-toggle="dropdown"></i>
						    <ul class="dropdown-menu">
						    	<li><a href="#">Modificar datos</a></li>
						    	<li><a href="#">Asignar administrador</a></li>
						    	<li class="divider"></li>
						    	<li><a href="#">Eliminar usuario</a></li>
						    </ul>
					    </div>
					</td>
				</tr>
				<tr>
					<td>Álvaro</td>
					<td>Salas Ávila</td>
					<td><a href="#">alvaro.salas</a></td>
					<td>Miembro</td>
					<td>Alumno</td>
					<td>    
						<div class="btn-group">
							<i class="icon-cog dropdown-toggle" data-toggle="dropdown"></i>
						    <ul class="dropdown-menu">
						    	<li><a href="#">Modificar datos</a></li>
						    	<li><a href="#">Asignar administrador</a></li>
						    	<li class="divider"></li>
						    	<li><a href="#">Eliminar usuario</a></li>
						    </ul>
					    </div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>