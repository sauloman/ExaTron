<?php 
echo $javascript->link('ckeditor/ckeditor', NULL, false); 
?>
<div class="questions form">
<?php echo $this->Form->create('Question');?>
	<fieldset>
		<legend><?php __('Edit Question'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('exam_id');
		echo $this->Form->input('Contenido');
		echo $fck->load('question.Contenido');
		echo $this->Form->input('Resp_Correc');
		echo $this->Form->input('puntuacion');
		echo $this->Form->input('profesor');
		echo $this->Form->input('Fecha');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Question.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Question.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Questions', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Exams', true), array('controller' => 'exams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exam', true), array('controller' => 'exams', 'action' => 'add')); ?> </li>
	</ul>
</div>