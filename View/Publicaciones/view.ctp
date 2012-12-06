<div class="publicaciones view">
<h2><?php  echo __('Publicacione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($publicacione['Publicacione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($publicacione['Publicacione']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($publicacione['Publicacione']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($publicacione['Publicacione']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion Archivo'); ?></dt>
		<dd>
			<?php echo h($publicacione['Publicacione']['direccion_archivo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Publicacione'), array('action' => 'edit', $publicacione['Publicacione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Publicacione'), array('action' => 'delete', $publicacione['Publicacione']['id']), null, __('Are you sure you want to delete # %s?', $publicacione['Publicacione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Publicaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publicacione'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Articulos'); ?></h3>
	<?php if (!empty($publicacione['Articulo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Publicacione Id'); ?></th>
		<th><?php echo __('Contenido'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($publicacione['Articulo'] as $articulo): ?>
		<tr>
			<td><?php echo $articulo['publicacione_id']; ?></td>
			<td><?php echo $articulo['contenido']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'articulos', 'action' => 'view', $articulo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'articulos', 'action' => 'edit', $articulo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'articulos', 'action' => 'delete', $articulo['id']), null, __('Are you sure you want to delete # %s?', $articulo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Articulo'), array('controller' => 'articulos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Comentarios'); ?></h3>
	<?php if (!empty($publicacione['Comentario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Publicacione Id'); ?></th>
		<th><?php echo __('Contenido'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($publicacione['Comentario'] as $comentario): ?>
		<tr>
			<td><?php echo $comentario['id']; ?></td>
			<td><?php echo $comentario['publicacione_id']; ?></td>
			<td><?php echo $comentario['contenido']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comentarios', 'action' => 'view', $comentario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comentarios', 'action' => 'edit', $comentario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comentarios', 'action' => 'delete', $comentario['id']), null, __('Are you sure you want to delete # %s?', $comentario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Eventos'); ?></h3>
	<?php if (!empty($publicacione['Evento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Publicacione Id'); ?></th>
		<th><?php echo __('Tipo'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Hora'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($publicacione['Evento'] as $evento): ?>
		<tr>
			<td><?php echo $evento['publicacione_id']; ?></td>
			<td><?php echo $evento['tipo']; ?></td>
			<td><?php echo $evento['fecha']; ?></td>
			<td><?php echo $evento['hora']; ?></td>
			<td><?php echo $evento['direccion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'eventos', 'action' => 'view', $evento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'eventos', 'action' => 'edit', $evento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'eventos', 'action' => 'delete', $evento['id']), null, __('Are you sure you want to delete # %s?', $evento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Memorias'); ?></h3>
	<?php if (!empty($publicacione['Memoria'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Publicacione Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Guia Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($publicacione['Memoria'] as $memoria): ?>
		<tr>
			<td><?php echo $memoria['publicacione_id']; ?></td>
			<td><?php echo $memoria['usuario_id']; ?></td>
			<td><?php echo $memoria['guia_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'memorias', 'action' => 'view', $memoria['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'memorias', 'action' => 'edit', $memoria['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'memorias', 'action' => 'delete', $memoria['id']), null, __('Are you sure you want to delete # %s?', $memoria['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Memoria'), array('controller' => 'memorias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Proyectos'); ?></h3>
	<?php if (!empty($publicacione['Proyecto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Publicacione Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Fecha Inicio'); ?></th>
		<th><?php echo __('Fecha Termino'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($publicacione['Proyecto'] as $proyecto): ?>
		<tr>
			<td><?php echo $proyecto['publicacione_id']; ?></td>
			<td><?php echo $proyecto['estado_id']; ?></td>
			<td><?php echo $proyecto['fecha_inicio']; ?></td>
			<td><?php echo $proyecto['fecha_termino']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'proyectos', 'action' => 'view', $proyecto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'proyectos', 'action' => 'edit', $proyecto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'proyectos', 'action' => 'delete', $proyecto['id']), null, __('Are you sure you want to delete # %s?', $proyecto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Usuarios Eventos'); ?></h3>
	<?php if (!empty($publicacione['UsuariosEvento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Publicacione Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($publicacione['UsuariosEvento'] as $usuariosEvento): ?>
		<tr>
			<td><?php echo $usuariosEvento['publicacione_id']; ?></td>
			<td><?php echo $usuariosEvento['usuario_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'usuarios_eventos', 'action' => 'view', $usuariosEvento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'usuarios_eventos', 'action' => 'edit', $usuariosEvento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'usuarios_eventos', 'action' => 'delete', $usuariosEvento['id']), null, __('Are you sure you want to delete # %s?', $usuariosEvento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Usuarios Evento'), array('controller' => 'usuarios_eventos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Usuarios Proyectos'); ?></h3>
	<?php if (!empty($publicacione['UsuariosProyecto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Publicacione Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($publicacione['UsuariosProyecto'] as $usuariosProyecto): ?>
		<tr>
			<td><?php echo $usuariosProyecto['publicacione_id']; ?></td>
			<td><?php echo $usuariosProyecto['usuario_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'usuarios_proyectos', 'action' => 'view', $usuariosProyecto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'usuarios_proyectos', 'action' => 'edit', $usuariosProyecto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'usuarios_proyectos', 'action' => 'delete', $usuariosProyecto['id']), null, __('Are you sure you want to delete # %s?', $usuariosProyecto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Usuarios Proyecto'), array('controller' => 'usuarios_proyectos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
