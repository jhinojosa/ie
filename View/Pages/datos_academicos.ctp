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
$this->layout = null;
?>
		<h1 class="title-view">Datos académicos</h1>
		<div class="line"></div>
		<div class="container-publicacion publicacion-final contacto">
			<p class="parrafo-view">A continuación usted podrá ingresar datos académicos como títulos, carreras, estudios, grado, etc. y logros, como participaciones en congresos, proyectos, papers, etc.</p>
			<h3>Antecedentes académicos</h3>
			<div class="line"></div>
			<form id="newPublicationForm" class="form-horizontal" method="post" action="/users/add">
				<div class="control-group">
					<label class="control-label">Antecedente</label>
					<div class="controls">
						<input type="text" name="_method" placeholder="Ej. Phd. Ingeniería Civil Informática">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Institución</label>
					<div class="controls">
						<input type="text" name="_method" placeholder="Ej. Universidad de Santiago de Chile">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Año</label>
					<div class="controls">
						<input type="text" name="_method" placeholder="Ej.1998">
					</div>
				</div>
				<div id="btnSubmit">
					<button class="btn btn-primary" type="submit">Enviar</button>
					<button class="btn" type="button">Cancelar</button>
				</div>
			</form>
			<h3>Logros académicos</h3>
			<div class="line"></div>
			<form id="newPublicationForm" class="form-horizontal" method="post" action="/users/add">
				<div class="control-group">
					<label class="control-label">Logro</label>
					<div class="controls">
						<input type="text" name="_method" placeholder="Ej. Proyecto de informática educativa">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Descripción</label>
					<div class="controls">
						<textarea rows="5"></textarea>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Año</label>
					<div class="controls">
						<input type="text" name="_method" placeholder="Ej. 1998">
					</div>
				</div>
				<div id="btnSubmit">
					<button class="btn btn-primary" type="submit">Enviar</button>
					<button class="btn" type="button">Cancelar</button>
				</div>
			</form>
		</div>