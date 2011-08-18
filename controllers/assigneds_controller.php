<?php
class AssignedsController extends AppController {

	var $name = 'Assigneds';

	function index() {
		$this->Assigned->recursive = 0;
		$this->set('assigneds', $this->paginate());
	}
	
	function indexAlumno(){
		$this->Assigned->recursive = 0;
		$this->paginate=array('conditions' => array('Assigned.user_id'=>$this->Auth->user('id')));
		$data = $this->paginate('Assigned');
		$this->set('assigneds',$data);
	}
	
	
	function beforeFilter(){
		$this->Auth->authorize='controller';
		if($this->Auth->user('perfil')=='profesor'){
			//$this-> Auth->deny('indexAlumno');
			$this->Auth->allow('index');
			$this->Auth->allow('add');
			$this->Auth->allow('edit');
			$this->Auth->allow('delete');
		}else{
			$this->Auth->allow('indexAlumno');
		}
		
			
	}
	
	function view($id = null) {
		if (!$id) {
			$this->flash(__('Invalid assigned', true), array('action' => 'index'));
		}
		$this->set('assigned', $this->Assigned->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Assigned->create();
			if ($this->Assigned->save($this->data)) {
				$this->flash(__('Assigned saved.', true), array('action' => 'index'));
			} else {
			}
		}
		$exams = $this->Assigned->Exam->find('list');
		$users = $this->Assigned->User->find('list');
		$this->set(compact('exams', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->flash(sprintf(__('Invalid assigned', true)), array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Assigned->save($this->data)) {
				$this->flash(__('The assigned has been saved.', true), array('action' => 'index'));
			} else {
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Assigned->read(null, $id);
		}
		$exams = $this->Assigned->Exam->find('list');
		$users = $this->Assigned->User->find('list');
		$this->set(compact('exams', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->flash(sprintf(__('Invalid assigned', true)), array('action' => 'index'));
		}
		if ($this->Assigned->delete($id)) {
			$this->flash(__('Assigned deleted', true), array('action' => 'index'));
		}
		$this->flash(__('Assigned was not deleted', true), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}
}
