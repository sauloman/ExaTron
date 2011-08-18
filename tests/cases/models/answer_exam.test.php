<?php
/* AnswerExam Test cases generated on: 2011-08-10 06:56:55 : 1312952215*/
App::import('Model', 'AnswerExam');

class AnswerExamTestCase extends CakeTestCase {
	var $fixtures = array('app.answer_exam');

	function startTest() {
		$this->AnswerExam =& ClassRegistry::init('AnswerExam');
	}

	function endTest() {
		unset($this->AnswerExam);
		ClassRegistry::flush();
	}

}
