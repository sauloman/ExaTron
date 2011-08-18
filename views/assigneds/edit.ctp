<div class="assigneds form">
<?php echo $this->Form->create('Assigned');?>
	<fieldset>
		<legend><?php __('Edit Assigned'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('exam_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('calificacion');
		echo $this->Form->input('status');
		echo $this->Form->input('fecha');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Assigned.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Assigned.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Assigneds', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Exams', true), array('controller' => 'exams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exam', true), array('controller' => 'exams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>