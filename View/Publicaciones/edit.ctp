<div class="publicaciones form">
<?php echo $this->Form->create('Publicacione'); ?>
	<fieldset>
		<legend><?php echo __('Edit Publicacione'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Publicacione.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Publicacione.id'))); ?></li>
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
</div>
