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
			<li><a href="home">Portada</a><span class="divider">></span></li>
			<li><a href="#">Publicaciones</a><span class="divider">></span></li>
			<li><a href="#" class="active">Mis publicaciones</a></li>
		</ul>
		<h1 class="title-view">Mis publicación</h1>
		<div class="line"></div>
		<div class="container-publicacion clearfix" onload="centrar()">
			<div class="subcontainer-publicacion clearfix">
				<h2>Título de la publicación</h2>
				<div class="container-tipo clearfix">
					<h4>Publicación:</h4>
					<p class="parrafo-tipo">Evento</p>
				</div>
				<div class="container-tipo clearfix">
					<h4>Tipo: </h4>
					<p class="parrafo-tipo">Seminario</p>
				</div>
				<div class="container-participantes clearfix">
					<h4>Participantes: </h4>
					<div class="container-participantes">
						<a href="#">Julio Hinojosa</a>
						<a href="#">Álvaro Salas</a>
					</div>
				</div>
				<p>Breve descripción relacionada con la publicación</p>
			</div>
			<div class="container-options">
				<a class="btn btn-primary" href="#">Ver más</a>
				<a class="btn btn-primary" href="#">Comentar</a>
			</div>
		</div>
		<div class="container-publicacion publicacion-final clearfix">
			<div class="subcontainer-publicacion">
				<h2>Título de la publicación</h2>
				<div class="container-tipo clearfix">
					<h4>Publicación:</h4>
					<p class="parrafo-tipo">Memoria</p>
				</div>
				<div class="container-participantes clearfix">
					<h4>Alumno: </h4>
					<div class="container-participantes">
						<a href="#">Julio Hinojosa</a>
					</div>
				</div>
				<div class="container-participantes clearfix">
					<h4>Profesor Guía: </h4>
					<div class="container-participantes">
						<a href="#">Cristopher Leiva</a>
					</div>
				</div>
				<p>Breve descripción relacionada con la publicación</p>
			</div>
			<div class="container-options">
				<a class="btn btn-primary" href="#">Ver más</a>
				<a class="btn btn-primary" href="#">Comentar</a>
			</div>
		</div>
	</div>
