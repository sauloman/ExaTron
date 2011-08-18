<?php
/* Answerexams Test cases generated on: 2011-08-15 19:27:49 : 1313429269*/
App::import('Controller', 'Answerexams');

class TestAnswerexamsController extends AnswerexamsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AnswerexamsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.answerexam');

	function startTest() {
		$this->Answerexams =& new TestAnswerexamsController();
		$this->Answerexams->constructClasses();
	}

	function endTest() {
		unset($this->Answerexams);
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
