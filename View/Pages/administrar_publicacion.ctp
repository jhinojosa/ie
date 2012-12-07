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
				<a href="#">Publicaciones</a><span class="divider">></span>
				<a href="#" class="active">Administrar publicaciones</a>
			</li>
		</ul>
		<h1 class="title-view">Administrar publicaciones</h1>
		<div class="line"></div>
		<table class="table table-hover">
			<thead>
				<th>ID</th>
				<th>Publicación</th>
				<th>Creador</th>
				<th>Fecha creación</th>
				<th>Administrar</th>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td><a href="#">Publicación 1</a></td>
					<td><a href="#">Julio Hinojosa</a></td>
					<td>01/12/2008</td>
					<td>    
						<div class="btn-group">
							<i class="icon-cog dropdown-toggle" data-toggle="dropdown"></i>
						    <ul class="dropdown-menu">
						    	<li><a href="#">Modificar contenido</a></li>
						    	<li><a href="#">Cambiar título</a></li>
						    	<li class="divider"></li>
						    	<li><a href="#">Eliminar publicación</a></li>
						    </ul>
					    </div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>