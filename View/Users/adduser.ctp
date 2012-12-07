<!-- app/View/Users/add.ctp -->

<div class="users form">
<?php echo $this->Form->create('User'); ?>

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
		<label class="control-label">Segundo nombre</label>
		<div class="controls">
			<?php
				echo $this->Form->input('nombre2', array(
					'label' => false,
					'type' => 'text', 				
					'placeholder' => 'Ej: Pedro'
					)
				);
			?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Primer apellido</label>
		<div class="controls">
			<?php
				echo $this->Form->input('apellido1', array(
					'label' => false,
					'type' => 'text', 
					'placeholder' => 'Ej: Pérez'
					)
				);
			?>			
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Segundo apellido</label>
		<div class="controls">
			<?php
				echo $this->Form->input('apellido2', array(
					'label' => false,
					'type' => 'text',
					'placeholder' => 'Ej: González'
					)
				);
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