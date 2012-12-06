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
	<h3>Información proyecto</h3>
	<div class="line"></div>
	<div class="control-group">
		<label class="control-label">Participantes</label>
		<div class="controls">
			<input type="text" placeholder="Nombre del participante">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Estado</label>
		<div class="controls">
			<select>
				<option></option>
				<option>Pendiente</option>
				<option>En proceso</option>
				<option>Cancelado</option>
				<option>Finalizado</option>
			</select>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Fecha inicio</label>
		<div class="controls">
			<input type="date">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Fecha termino</label>
		<div class="controls">
			<input type="date">
		</div>
	</div>
