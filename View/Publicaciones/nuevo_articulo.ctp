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
	<h3>Información artículo</h3>
	<div class="line"></div>
	<div class="control-group">
		<label class="control-label">Autor</label>
		<div class="controls">
			<?php echo $this->Form->input('autor', array('label' => false, 'type' => 'text', 'placeholder' => 'Ej. Rosa Muñoz')); ?>
			<!--<input type="text" placeholder="Nombre del autor">-->
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Contenido</label>
		<div class="controls">
			<?php echo $this->Form->input('contenido', array('label' => false, 'type' => 'textarea', 'cols' => '60')); ?>
			<!--<textarea rows="10" cols="60"></textarea>-->
		</div>
	</div>