<?php
/* Answered Test cases generated on: 2011-08-15 21:04:13 : 1313435053*/
App::import('Model', 'Answered');

class AnsweredTestCase extends CakeTestCase {
	var $fixtures = array('app.answered');

	function startTest() {
		$this->Answered =& ClassRegistry::init('Answered');
	}

	function endTest() {
		unset($this->Answered);
		ClassRegistry::flush();
	}

}
