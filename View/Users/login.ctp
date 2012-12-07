<div class="container-login">
	<div class="content">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Por favor, ingrese su usuario y contraseña'); ?></legend>
    <?php
        echo $this->Form->input('Nombre de usuario:', array('placeholder' => 'Ej: jperez'));
        echo $this->Form->input('Contraseña:', array('placeholder' => '*******'));
    ?>
    </fieldset>
<?php echo $this->Form->submit( 'Ingresar', array( 'value' => 'ingresar', 'div' => false, 'class' => 'btn btn-primery', 'id' => 'loginbutton') ); ?>
</div>
</div>