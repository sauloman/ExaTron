<?php
/* Exam Fixture generated on: 2011-08-16 18:54:37 : 1313513677 */
class ExamFixture extends CakeTestFixture {
	var $name = 'Exam';
	var $table = 'exam';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'nom_examen' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'coordinacion' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'creador' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'fecha' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_spanish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'nom_examen' => 'Lorem ipsum dolor sit amet',
			'coordinacion' => 'Lorem ipsum dolor sit amet',
			'creador' => 'Lorem ipsum dolor sit amet',
			'fecha' => '2011-08-16'
		),
	);
}
