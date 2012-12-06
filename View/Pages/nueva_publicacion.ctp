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
				<a href="#" class="active">Nueva publicación</a>
			</li>
		</ul>
		<h1 class="title-view">Nueva publicación</h1>
		<div class="line"></div>
		<form id="newPublicationForm" class="form-horizontal" method="post" action="/users/add">
			<div class="control-group">
				<label class="control-label">Título</label>
				<div class="controls">
					<input type="text" name="_method" placeholder="Título">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Tipo de publicacíón</label>
				<div class="controls">
					<select placeholder="Select a publication">
						<option value=""></option>
						<option value="evento">Evento</option>
						<option value="articulo">Artículo</option>
						<option value="memoria">Memoria</option>
						<option value="proyecto">Proyecto</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Descripción</label>
				<div class="controls">
					<textarea rows="4" cols="100"></textarea>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Adjuntar un archivo</label>
				<div class="controls">
					<input type="file" placeholder="Título">
				</div>
			</div>
			<div id="newPublication"></div>
			<div id="btnSubmit">
				<button class="btn btn-primary" type="submit">Enviar</button>
				<button class="btn" type="button">Cancelar</button>
			</div>
		</form>
	</div>
