<div class="exams form">
<?php echo $this->Form->create('Exam');?>
	<fieldset>
		<legend><?php __('Editar Examen'); ?> <?php  var_dump($exam);?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nom_examen');
		echo $this->Form->input('coordinacion');
		echo $this->Form->input('creador');
		echo $this->Form->input('fecha');
		
		foreach($exam['Question'] as $question){
			var_dump($question); 
			echo $this->Form->input('Exam.Question.Contenido', array("value"=>$question['Contenido']));
		}
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Exam.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Exam.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Exams', true), array('action' => 'index'));?></li>
	</ul>
</div>