<?php
/* AnswerExam Fixture generated on: 2011-08-10 06:56:55 : 1312952215 */
class AnswerExamFixture extends CakeTestFixture {
	var $name = 'AnswerExam';
	var $table = 'answer_exam';

	var $fields = array(
		'idExam_anwer' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'alumno_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'calificacion' => array('type' => 'float', 'null' => false, 'default' => NULL),
		'fecha' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'idExam_anwer', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_spanish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'idExam_anwer' => 1,
			'alumno_id' => 1,
			'calificacion' => 1,
			'fecha' => '2011-08-10'
		),
	);
}
