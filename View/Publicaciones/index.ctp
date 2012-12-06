<div class="publicaciones index">
	<h2><?php echo __('Publicaciones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion_archivo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($publicaciones as $publicacione): ?>
	<tr>
		<td><?php echo h($publicacione['Publicacione']['id']); ?>&nbsp;</td>
		<td><?php echo h($publicacione['Publicacione']['tipo']); ?>&nbsp;</td>
		<td><?php echo h($publicacione['Publicacione']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($publicacione['Publicacione']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($publicacione['Publicacione']['direccion_archivo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $publicacione['Publicacione']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $publicacione['Publicacione']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $publicacione['Publicacione']['id']), null, __('Are you sure you want to delete # %s?', $publicacione['Publicacione']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Publicacione'), array('action' => 'add')); ?></li>
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
