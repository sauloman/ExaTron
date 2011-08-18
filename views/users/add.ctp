<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php __('Agregar nuevo Usuario'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('matricula');
		echo $this->Form->input('password');
		echo $this->Form->input('perfil',array('options'=>array('profesor'=>'Profesor','alumno'=>'Alumno','administrador'=>'Administrador')));
		echo $this->Form->input('notas');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista de Usuarios', true), array('action' => 'index'));?></li>
	</ul>
</div>