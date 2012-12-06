<!--<div class="publicaciones form">
<?php echo $this->Form->create('Publicacione'); ?>
	<fieldset>
		<legend><?php echo __('Add Publicacione'); ?></legend>
	<?php
		echo $this->Form->input('tipo');
		echo $this->Form->input('titulo');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('direccion_archivo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Publicaciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Articulos'), array('controller' => 'articulos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Articulo'), array('controller' => 'articulos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Memorias'), array('controller' => 'memorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Memoria'), array('controller' => 'memorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios Eventos'), array('controller' => 'usuarios_eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuarios Evento'), array('controller' => 'usuarios_eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios Proyectos'), array('controller' => 'usuarios_proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuarios Proyecto'), array('controller' => 'usuarios_proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>-->

	<div class="container-view">
		<ul class="breadcrumb">
			<li>
				<a href="home">Portada</a><span class="divider">></span>
				<a href="#">Publicaciones</a><span class="divider">></span>
				<a href="#" class="active">Nueva publicación</a>
			</li>
		</ul>
		<h1 class="title-view">Nueva publicación</h1>
		<div class="line"></div>
		<!--<form id="newPublicationForm" class="form-horizontal" method="post" action="/users/add">-->
		<?php echo $this->Form->create('Publicacione', array('id' => 'newPublicationForm', 'class' => 'form-horizontal')); ?>
			<div class="control-group">
				<label class="control-label">Título</label>
				<div class="controls">
					<?php echo $this->Form->input('titulo', array('label' => false, 'type' => 'text', 'placeholder' => 'Título')); ?>
					<!--<input type="text" name="_method" placeholder="Título">-->
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Tipo de publicacíón</label>
				<div class="controls">
					<?php echo $this->Form->input('tipo', array('label' => false, 'type' => 'select', 'options' => array(' ', 'Evento', 'Memoria', 'Articulo','Proyecto'))) ?>
					<!--<select placeholder="Select a publication" label="tipo">
						<option value=""></option>
						<option value="evento">Evento</option>
						<option value="articulo">Artículo</option>
						<option value="memoria">Memoria</option>
						<option value="proyecto">Proyecto</option>
					</select>-->
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Descripción</label>
				<div class="controls">
					<?php echo $this->Form->input('descripcion', array('label' => false, 'type' => 'textarea','cols' => '100')); ?>
					<!--<textarea rows="4" cols="100"></textarea>-->
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Adjuntar un archivo</label>
				<div class="controls">
					<?php echo $this->Form->input('direccion_archivo', array('label' => false, 'type' => 'file')); ?>
					<!--<input type="file" placeholder="Título">-->
				</div>
			</div>
			<div id="newPublication"></div>
			<div id="btnSubmit">
				<?php echo $this->Form->input('Enviar', array('label' => false, 'type' => 'submit', 'class' => 'btn btn-primary')); ?>
				<!--<button class="btn btn-primary" type="submit">Enviar</button>-->
				<?php echo $this->Form->input('Cancelar', array('label' => false, 'type' => 'button', 'class' => 'btn')); ?>
				<!--<button class="btn" type="button">Cancelar</button>-->
			</div>
		<?php echo $this->Form->end(); ?>
		<!--</form>-->
	</div>