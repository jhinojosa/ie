<!--
<div class="users form">
	<?php 
		echo $this->Form->create('User');
	?>
	<?php
		echo $this->Form->input('username', array(
			'label' => array('text' => 'Nombre de usuario', 'class' => 'control-label'),
			'type' => 'text', 
			'name' => '_method'
			)
		);
	?>
					<?php
						echo $this->Form->input('password', array(
							'label' => array('text' => 'Conraseña', 'class' => 'control-label'),
							'type' => 'password', 
							'name' => '_method'
							)
						);
						echo $this->Form->input('role', array(
							'label' => array('text' => 'Tipo de usuario', 'class' => 'control-label'),
						    'options' => array('Académico', 'Alumno'),
						    'empty' => '',
						    'name' =>'_method'
						));
					?>

				<?php 
					echo $this->Form->submit( 'Agregar', array( 
						'value' => 'agregar', 
						'div' => false, 
						'class' => 'btn btn-primery', 
						'id' => 'adduserbutton'));
					echo $this->Form->input( 'Cancelar', array(
						'label' => false,
						'type' => 'button',
						'class' => 'btn',
						));					
				?>							
</div>
-->

<!-- app/View/Users/add.ctp -->

<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <!--<fieldset>-->
        <!--<legend><?php  echo __('Nuevo usuario'); ?></legend>-->
        <?php 
	        echo $this->Form->input('username', array( 
	        	'label' => 'Nombre de usuario'
	        	));
	        echo $this->Form->input('password', array(
	        	'type'=>'password',
	        	'label'=>'Contraseña'
	        	));

        //echo $this->Form->input('Rol: ', array(
            //'options' => array('admin' => 'Administrador', 'author' => 'Miembro')
        /*));*/
    ?>
    <!--</fieldset>-->
    <div id="btnSubmit">
		<?php 
			echo $this->Form->submit( 'Agregar', array( 
				'value' => 'agregar', 
				'div' => false, 
				'class' => 'btn btn-primery', 
				'id' => 'adduserbutton'
				));
			echo $this->Form->input( 'Cancelar', array(
				'label' => false,
				'type' => 'button',
				'class' => 'btn',
				));
		?>
	</div>
</div>