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
    <div class="control-group">
    	<label class="control-label">Primer nombre</label>
    	<div class="controls">
		    <?php 
		        echo $this->Form->input('nomre1', array( 
		        	'label' => false,
		        	'type' => 'text',
		        	'placeholder' => 'Ej: Juan'
		        	));
		    ?>
		</div>
	</div>
    <div class="control-group">
    	<label class="control-label">Contraseña</label>
    	<div class="controls">		
			<?php	        
		        echo $this->Form->input('password', array(
		        	'type'=>'password',
		        	'label'=>false
		        	));
		    ?>
		</div>
	</div>
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