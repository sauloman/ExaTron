<div class="assigneds index">
	<h2><?php __('Ex&aacute;menes asignados');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('exam_id');?></th>
			
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
		
		<td>
			<?php echo $this->Html->link($assigned['Exam']['nom_examen'], array('controller' => 'exams', 'action' => 'view', $assigned['Exam']['id'])); ?>
		</td>
		<td><?php echo $assigned['Assigned']['calificacion']; ?>&nbsp;</td>
		<td><?php echo $assigned['Assigned']['status']; ?>&nbsp;</td>
		<td><?php echo $assigned['Assigned']['fecha']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Contestar examen', true), array('controller'=>'answers', 'action' => 'add', $assigned['Assigned']['id'])); ?>
			
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
		
		
	</ul>
</div>