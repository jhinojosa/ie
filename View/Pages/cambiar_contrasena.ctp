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
		<h1 class="title-view">Cambiar contraseña</h1>
		<div class="line"></div>
		<form id="newPublicationForm" class="form-horizontal" method="post" action="/users/add">
			<div class="control-group">
				<label class="control-label">Contraseña antigua</label>
				<div class="controls">
					<input type="password" placeholder="Contraseña">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Nueva contraseña</label>
				<div class="controls">
					<input type="password" placeholder="Contraseña">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Repita contraseña</label>
				<div class="controls">
					<input type="password" placeholder="Contraseña">
				</div>
			</div>
			<div id="btnSubmit">
				<button class="btn btn-primary" type="submit">Enviar</button>
				<button class="btn" type="button">Cancelar</button>
			</div>
		</form>