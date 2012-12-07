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
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<head>
	<title>Inform&aacute;tica Educativa</title>
	<link rel="shortcut icon" href="favicon.ico">
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap');
		echo $this->Html->css('style');
		echo $this->Html->css('loginstyle');
		echo $this->Html->css('bootstrap-responsive');
		
		echo $this->Html->script('javascript');
		echo $this->Html->script('jquery-1.8.3.min');
		echo $this->Html->script('bootstrap');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

	?>	<!--<link rel="stylesheet" href="style.css" type="text/css" media="screen" />-->
</head>
<body>
	<div class="container-header-footer">
		<div class="subcontainer-header-footer">
			<a href="http://localhost/ie/"><?php echo $this->Html->image('logo_IE5.png', array('id'=>'logo_ie')); ?></a>
			<span class="rectangulo_naranja" id="rectangulo_header"></span>
			<a href="http://www.usach.cl"><?php echo $this->Html->image('logo_usach.png', array('id'=>'logo_usach')); ?></a>
		</div>
	</div>
	<div class="row clearfix" id="container-page">
		<div class="span3 bs-docs-sidebar" id="container-menu">
			<ul class="nav nav-list affix-top">
			<li class="active"><a href="home">Portada</a></li>
			<li><a href="quienes_somos">¿Qui&eacute;nes somos?</a></li>
			<li><a href="#"><i class="icon-chevron-down"></i>Publicaciones</a>
					<ul class="nav nav-list affix-top sublist">
						<li><a href="evento">Eventos</a></li>
						<li><a href="articulo">Artículos</a></li>
						<li><a href="memoria">Memorias</a></li>
						<li><a href="proyecto">Proyectos</a></li>
						<li><a href="nueva_publicacion">Nueva publicación</a></li>
						<li><a href="mis_publicaciones">Mis publicaciones</a></li>
						<li><a href="administrar_publicacion">Administrar publicaciones</a></li>
					</ul>
			</li>
			<li><a href="#"><i class="icon-chevron-down"></i>Miembros</a>
				<ul class="nav nav-list affix-top sublist">
					<li><a href="miembros_academicos">Académicos</a></li>
					<li><a href="miembros_alumnos">Alumnos</a></li>
				</ul>
			</li>
			<li><a href="contacto">Contacto</a></li>
			<li><a href="ayuda">Ayuda</a></li>
			<li><a href="#"><i class="icon-chevron-down"></i>Usuarios</a>
				<ul class="nav nav-list affix-top sublist">
<<<<<<< HEAD
					<li><?php 
					echo $this->Html->link('Nuevo usuario', array('controller'=>'users', 'action'=>'adduser')); 
					?></li>
=======
					<li><a href="nuevo_usuario">Nuevo usuario</a></li>
>>>>>>> e352ef44a9efcd0665b8bdc4d48c9a3ac1cc052e
					<li><a href="administrar_usuarios">Administrar usuarios</a></li>
					<li><a href="configurar_cuenta">Configurar cuenta</a></li>
					<li><a href="#">Mi perfil</a></li>
				</ul>
			</li>
			</ul>
		</div>
		<?php echo $content_for_layout ?>
		<!--<div id="container-rightSidebar">
			<div id="rect">
			<h3>Iniciar Sesi&oacute;n</h3>
			</div>
			<div id="container-login">

			</div>
		</div>-->
	</div>
	<div class="container-header-footer">
		<div class="subcontainer-header-footer">
			<span class="rectangulo_naranja" id="rectangulo_footer"></span>
			<div id="inf_usach">
				<t id="title1">Universidad de Santiago de Chile</t><br>
				<t id="title2">Departamento de Ingenier&iacute;a Inform&aacute;tica</t><br>
				<t id="title3">Avenida Ecuador 3659, Estaci&oacute;n Central, Santiago, Chile</t><br>
				<t id="title3">Tel&eacute;fono: +56-2-71 80900</t><br>
			</div>
			<!--<img id="logo_diinf" src="DIINF.png">-->
			<?php echo $this->Html->image('DIINF.png', array('id'=>'logo_diinf')); ?>
		</div>
	</div>
</body>
