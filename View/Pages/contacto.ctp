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
				<a href="#" class="active">Contacto</a>
			</li>
		</ul>
		<h1 class="title-view">Contacto</h1>
		<div class="line"></div>
		<div class="container-publicacion publicacion-final contacto">
			<p class="parrafo-view">Si quieres contactarte con los miembros de Informática Educativa, te dejamos a continuación la información de contacto, además de la posibilidad de enviarnos algún comentario, solicitud, queja, etc.</p>
			<h3>Información contacto</h3>
			<div class="line"></div>
			<p class="parrafo-view">Información como teléfono de algún académico que representa al área, además de correos alternativos.</p>
			<h3>Envíanos un mensaje</h3>
			<div class="line"></div>
			<form class="form-horizontal" method="post" action="/users/add">
				<div class="control-group">
					<label class="control-label">De</label>
					<div class="controls">
						<input type="text" placeholder="Su email">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Para</label>
					<div class="controls">
						<input type="text" value="informatica.educativa@usach.cl" disabled>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Mensaje</label>
					<div class="controls">
						<textarea rows="5"></textarea>
					</div>
				</div>
				<div id="enviar-msj">
					<button class="btn btn-primary" type="submit">Enviar</button>
					<button class="btn" type="button">Cancelar</button>
				</div>
			</form>
		</div>
	</div>
