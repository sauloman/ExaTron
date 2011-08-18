<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit asasas Exam', true), array('action' => 'edit', $exam['Exam']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Exam', true), array('action' => 'delete', $exam['Exam']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $exam['Exam']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Exams', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exam', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('tomar', true), array('action' => 'take')); ?> </li>
	</ul>
</div>
