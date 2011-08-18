<div class="assigneds index">
	<h2><?php __('Ex&aacute;menes asignados');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('exam_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('calificacion');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th><?php echo $this->Paginator->sort('fecha');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($assigneds as $assigned):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $assigned['Assigned']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($assigned['Exam']['nom_examen'], array('controller' => 'exams', 'action' => 'view', $assigned['Exam']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($assigned['User']['nombre'], array('controller' => 'users', 'action' => 'view', $assigned['User']['id'])); ?>
		</td>
		<td><?php echo $assigned['Assigned']['calificacion']; ?>&nbsp;</td>
		<td><?php echo $assigned['Assigned']['status']; ?>&nbsp;</td>
		<td><?php echo $assigned['Assigned']['fecha']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $assigned['Assigned']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $assigned['Assigned']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $assigned['Assigned']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $assigned['Assigned']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Asignar Examen', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Exams', true), array('controller' => 'exams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exam', true), array('controller' => 'exams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>