<?php
/* Answers Test cases generated on: 2011-08-16 21:19:27 : 1313522367*/
App::import('Controller', 'Answers');

class TestAnswersController extends AnswersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AnswersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.answer', 'app.question', 'app.exam', 'app.assigned', 'app.user');

	function startTest() {
		$this->Answers =& new TestAnswersController();
		$this->Answers->constructClasses();
	}

	function endTest() {
		unset($this->Answers);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
