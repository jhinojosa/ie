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
	<h3>Información memoria</h3>
	<div class="line"></div>
	<div class="control-group">
		<label class="control-label">Autor</label>
		<div class="controls">
			<select>
<<<<<<< HEAD
				<option></option>
=======
				<option><?php echo $hola; ?></option>
>>>>>>> e352ef44a9efcd0665b8bdc4d48c9a3ac1cc052e
			</select>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Profesor guía</label>
		<div class="controls">
			<select>
				<option></option>
			</select>
		</div>
	</div>