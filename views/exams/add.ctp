<div class="exams form">
<?php echo $this->Form->create('Exam');?>
	<fieldset>
		<legend><?php __('Agregar Examen'); ?></legend>
	<?php
		echo $this->Form->input('nom_examen');
		echo $this->Form->input('coordinacion');
		echo $this->Form->input('creador');
		echo $this->Form->input('fecha');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Examenes', true), array('action' => 'index'));?></li>
	</ul>
</div>