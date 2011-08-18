<?php
class Answer extends AppModel {
	var $name = 'Answer';
	var $useTable = 'answer';
	var $displayField = 'resp_alumno';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Question' => array(
			'className' => 'Question',
			'foreignKey' => 'question_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Assigned' => array(
			'className' => 'Assigned',
			'foreignKey' => 'assigned_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
