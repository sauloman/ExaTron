<?php
/* Exam Test cases generated on: 2011-08-16 18:54:37 : 1313513677*/
App::import('Model', 'Exam');

class ExamTestCase extends CakeTestCase {
	var $fixtures = array('app.exam', 'app.assigned', 'app.user', 'app.question');

	function startTest() {
		$this->Exam =& ClassRegistry::init('Exam');
	}

	function endTest() {
		unset($this->Exam);
		ClassRegistry::flush();
	}

}
