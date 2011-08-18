<?php
/* Answered Fixture generated on: 2011-08-15 21:04:13 : 1313435053 */
class AnsweredFixture extends CakeTestFixture {
	var $name = 'Answered';
	var $table = 'answered';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'alumno_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'calificacion' => array('type' => 'float', 'null' => false, 'default' => NULL),
		'fecha' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'Exam_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'exam_id' => array('column' => 'Exam_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_spanish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'alumno_id' => 1,
			'calificacion' => 1,
			'fecha' => '2011-08-15',
			'Exam_id' => 1
		),
	);
}
