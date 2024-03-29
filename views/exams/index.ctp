<div class="exams index">
	<h2><?php __('Listado de Examen');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('Nombre de Examen');?></th>
			<th><?php echo $this->Paginator->sort('Coordinacion');?></th>
			<th><?php echo $this->Paginator->sort('Creado por');?></th>
			<th><?php echo $this->Paginator->sort('Fecha');?></th>
			<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($exams as $exam):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $exam['Exam']['id']; ?>&nbsp;</td>
		<td><?php echo $exam['Exam']['nom_examen']; ?>&nbsp;</td>
		<td><?php echo $exam['Exam']['coordinacion']; ?>&nbsp;</td>
		<td><?php echo $exam['Exam']['creador']; ?>&nbsp;</td>
		<td><?php echo $exam['Exam']['fecha']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $exam['Exam']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $exam['Exam']['id']), null, sprintf(__('Quiere Eliminar el Examen # %s?', true), $exam['Exam']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina %page% de %pages%, mostrando %current% examenes de %count% en total, empezando de %start%, terminando en %end%', true)
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
	<h3><?php __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Examen', true), array('action' => 'add')); ?></li>
		
	</ul>
</div>