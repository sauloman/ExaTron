<div class="exams view">
<h2><?php  __('Exam');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $exam['Exam']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nom Examen'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $exam['Exam']['nom_examen']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Coordinacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $exam['Exam']['coordinacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Creador'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $exam['Exam']['creador']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $exam['Exam']['fecha']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Exam', true), array('action' => 'edit', $exam['Exam']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Exam', true), array('action' => 'delete', $exam['Exam']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $exam['Exam']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Exams', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exam', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('tomar', true), array('action' => 'take')); ?> </li>
	</ul>
</div>
