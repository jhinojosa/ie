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
				<a href="#">Miembros</a><span class="divider">></span>
				<a href="#" class="active">Alumnos</a>
			</li>
		</ul>
		<h1 class="title-view">Alumnos</h1>
		<div class="line"></div>
		<div class="container-publicacion clearfix">
			<?php echo $this->Html->image('yo.jpg', array('class'=>'img-miembro')); ?>
				<h2>Julio Hinojosa</h2>
					<h4>Cargo</h4>
					<p>Memorista informática educativa</p>
					<h4>Estudios</h4>
					<p>Licenciado en Ciencias de la informática</p>
			<a class="btn btn-primary ver-perfil" href="#">Ver perfil</a>
		</div>
		<div class="container-publicacion clearfix">
			<?php echo $this->Html->image('yo.jpg', array('class'=>'img-miembro')); ?>
				<h2>Julio Hinojosa</h2>
					<h4>Cargo</h4>
					<p>Memorista informática educativa</p>
					<h4>Estudios</h4>
					<p>Licenciado en Ciencias de la informática</p>
			<a class="btn btn-primary ver-perfil" href="#">Ver perfil</a>
		</div>
	</div>