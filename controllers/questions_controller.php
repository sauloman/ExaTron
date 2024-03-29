<?php
class QuestionsController extends AppController {

	var $name = 'Questions';
	var $helpers = array('Fck');
	


	function index() {
		$this->Question->recursive = 0;
		$this->set('questions', $this->paginate());
	}
	
	function beforeFilter(){
		$this->Auth->authorize='controller';
		if($this->Auth->user('perfil')=='profesor'){
			
			
			$this->Auth->allow('index');
			$this->Auth->allow('add');
			$this->Auth->allow('edit');
			$this->Auth->allow('delete');
		}
			$this->set('usuario',$this->Auth->user('matricula'));
			$this->set('perfil',$this->Auth->user('perfil'));
			
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid question', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('question', $this->Question->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Question->create();
			if ($this->Question->save($this->data)) {
				$this->Session->setFlash(__('The question has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The question could not be saved. Please, try again.', true));
			}
		}
		$exams = $this->Question->Exam->find('list');
		$this->set(compact('exams'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid question', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Question->save($this->data)) {
				$this->Session->setFlash(__('The question has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The question could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Question->read(null, $id);
		}
		$exams = $this->Question->Exam->find('list');
		$this->set(compact('exams'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for question', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Question->delete($id)) {
			$this->Session->setFlash(__('Question deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Question was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
