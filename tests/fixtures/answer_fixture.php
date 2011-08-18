<?php
/* Answer Fixture generated on: 2011-08-16 20:09:12 : 1313518152 */
class AnswerFixture extends CakeTestFixture {
	var $name = 'Answer';
	var $table = 'answer';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'pregunta_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'resp_alumno' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 5, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'assigned_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'pregunta_id' => array('column' => 'pregunta_id', 'unique' => 0), 'fkassigned' => array('column' => 'assigned_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_spanish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'pregunta_id' => 1,
			'resp_alumno' => 'Lor',
			'assigned_id' => 1
		),
	);
}
