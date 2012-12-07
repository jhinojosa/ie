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
	<h3>Información evento</h3>
	<div class="line"></div>
	<?php echo $this->Form->create('Evento', array('id' => 'newPublicationForm', 'class' => 'form-horizontal')); ?>
	<div class="control-group">
		<label class="control-label">Participantes</label>
		<div class="controls">
			<input type="text" placeholder="Nombre participante">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Tipo de evento</label>
		<div class="controls">
			<?php echo $this->Form->input('tipo', array('label' => false, 'type' => 'select', 'options' => array('', 'Charla', 'Seminario', 'Exposición'))); ?>
			<!--<select>
				<option></option>
				<option>Charla</option>
				<option>Seminario</option>
				<option>Exposición</option>
			</select>-->
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Fecha</label>
		<div class="controls">
			<?php echo $this->Form->input('fecha', array('label' => false, 'type' => 'date')); ?>
			<!--<input type="date" placeholder="DD-MM-AAAA">-->
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Hora</label>
		<div class="controls">
			<?php echo $this->Form->input('hora', array('label' => false, 'type' => 'time')); ?>
			<!--<input type="time" placeholder="HH:MM:SS">-->
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Dirección</label>
		<div class="controls">
			<?php echo $this->Form->input('direccion', array('label' => false, 'type' => 'text')); ?>
			<!--<input type="text" placeholder="Calle Los Almendros 312">-->
		</div>
	</div>
	<?php echo $this->Form->end(); ?>