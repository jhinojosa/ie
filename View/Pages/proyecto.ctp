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

<script type="text/javascript">
	/*$(".container-publicacion").ready(function() {
		var ancho;
		ancho = $(".container-publicacion").width() - 250;
		alert(ancho);
		$(".subcontainer-publicacion").css("width", ancho);
	});*/
</script>
	<div class="container-view">
		<ul class="breadcrumb">
			<li>
				<a href="home">Portada</a><span class="divider">></span>
				<a href="#">Publicaciones</a><span class="divider">></span>
				<a href="#" class="active">Proyectos</a>
			</li>
		</ul>
		<h1 class="title-view">Proyectos</h1>
		<div class="line"></div>
		<div class="container-publicacion clearfix">
			<div class="subcontainer-publicacion">
				<h2>Nombre del proyecto</h2>
				<div class="container-participantes clearfix">
					<h4>Participantes: </h4>
					<div class="container-participantes">
						<a href="#">Cristopher Leiva</a>
						<a href="#">Julio Hinojosa</a>
						<a href="#">Álvaro Salas</a>
					</div>
				</div>
				<p>Breve descripción relacionada con la publicación  jejhfjdshf vjdshvhdfjv dfvfdhvhfv fvhfivfcds hsdjdsahdfh fuhsduhfusf fhudshfuhsduf hfusdhfuhsduf uhfusdhfusdhf dfhudshfuhds fdhsdufh udhfusdhfuhsd uhfuhdufhusd uhdfusdhfuhs duhdusfhusdhf ufhushdufhsdu uhfufhfuhd ufgudshfuhd udyhfduhyfudhs idfdhfihds</p>
			</div>
			<div class="container-options">
				<a class="btn btn-primary" href="#">Ver más</a>
				<a class="btn btn-primary" href="#">Comentar</a>
			</div>
		</div>
		<div class="container-publicacion publicacion-final clearfix">
			<div class="subcontainer-publicacion">
				<h2>Nombre del proyecto</h2>
				<div class="container-participantes clearfix">
					<h4>Participantes: </h4>
					<div class="container-participantes">
						<a href="#">Cristopher Leiva</a>
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
	</div>
