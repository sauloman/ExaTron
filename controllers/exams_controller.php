<?php
class ExamsController extends AppController {

	var $name = 'Exams';

	function index() {
		$this->Exam->recursive = 0;
		$this->set('exams', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->flash(__('Examen no valido', true), array('action' => 'index'));
		}
		$this->set('exam', $this->Exam->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Exam->create();
			if ($this->Exam->save($this->data)) {
				$this->flash(__('Examen guardado', true), array('action' => 'index'));
			} else {
			
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->flash(sprintf(__('Invalid exam', true)), array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Exam->save($this->data)) {
				$this->flash(__('El examen se edito satisfactoriamente.', true), array('action' => 'index'));
			} else {
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Exam->read(null, $id);
		}
	}
	
	function take($id = null) {
		if (!$id && empty($this->data)) {
			$this->flash(sprintf(__('Invalid exam', true)), array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Exam->save($this->data)) {
				$this->flash(__('El examen se edito satisfactoriamente.', true), array('action' => 'index'));
			} else {
			}
		}
		if (empty($this->data)) {
			$this->set('exam', $this->Exam->read(null, $id));
			$this->data = $this->Exam->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->flash(sprintf(__('Invalid exam', true)), array('action' => 'index'));
		}
		if ($this->Exam->delete($id)) {
			$this->flash(__('Examen eliminado', true), array('action' => 'index'));
		}
		$this->flash(__('Examen no eliminado', true), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}
}
