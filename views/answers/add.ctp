<div class="answers form">
<?php echo $this->Form->create('Answer',array('url'=>array('controller'=>'answers','action'=>'add',$idAssigned)));?>
	<fieldset>
		<legend><?php __('Realizando Examen '. $assigneds['Exam']['nom_examen']); ?></legend>
	<?php
	
	//echo $this->Form->hidden('assigned_id', array('value'=>$idAssigned));
	?><ol><?php 
	foreach($exam['Question'] as $key => $quest):
		//echo $this->element('answer.edit',array('id'=>$id));  
		//echo var_dump($exam);
		echo $this->Form->hidden( 'Answer.'.$key.'.question_id', array('value'=>$quest['id']));
		
		echo "<li>".$this->Form->input('Answer.'.$key.'.resp_alumno', array('label'=>$quest['Contenido']))."</li>";
		echo $this->Form->hidden('Answer.'.$key.'.assigned_id', array('value'=>$assigneds['Assigned']['id']));
	endforeach;
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Answers', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Questions', true), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question', true), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Assigneds', true), array('controller' => 'assigneds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assigned', true), array('controller' => 'assigneds', 'action' => 'add')); ?> </li>
	</ul>
</div>