<?php
/* Question Fixture generated on: 2011-07-27 20:54:14 : 1311792854 */
class QuestionFixture extends CakeTestFixture {
	var $name = 'Question';
	var $table = 'question';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'exam_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'Contenido' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'Resp_Correc' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'puntuacion' => array('type' => 'float', 'null' => false, 'default' => NULL),
		'profesor' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'Fecha' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'exam_id' => array('column' => 'exam_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_spanish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'exam_id' => 1,
			'Contenido' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'Resp_Correc' => 'Lorem ip',
			'puntuacion' => 1,
			'profesor' => 'Lorem ipsum dolor ',
			'Fecha' => '2011-07-27'
		),
	);
}
