<?php
/* Answer Test cases generated on: 2011-08-16 20:09:12 : 1313518152*/
App::import('Model', 'Answer');

class AnswerTestCase extends CakeTestCase {
	var $fixtures = array('app.answer', 'app.assigned', 'app.exam', 'app.question', 'app.user');

	function startTest() {
		$this->Answer =& ClassRegistry::init('Answer');
	}

	function endTest() {
		unset($this->Answer);
		ClassRegistry::flush();
	}

}
