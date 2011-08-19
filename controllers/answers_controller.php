<?php
class AnswersController extends AppController {

	var $name = 'Answers';

	function index() {
		$this->Answer->recursive = 0;
		$this->set('answers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->flash(__('Invalid answer', true), array('action' => 'index'));
		}
		$this->set('answer', $this->Answer->read(null, $id));
	}
	
	
	function beforeFilter(){
		$this->Auth->authorize='controller';
		if($this->Auth->user('perfil')=='alumno'){
			//$this-> Auth->deny('indexAlumno');
			
			//$this->Auth->allow('index');
			$this->Auth->allow('add');
			//$this->Auth->allow('edit');
			//$this->Auth->allow('delete');
		}
		$this->set('usuario',$this->Auth->user('matricula'));
		$this->set('perfil',$this->Auth->user('perfil'));
			
	}

	function add($idAssigned) {
		$assigneds = $this->Answer->Assigned->read(null, $idAssigned);
		//$questions = $this->Answer->Question->find('list');	
		$this->loadModel('Exam');
		$exam =$this->Exam->read(null, $assigneds['Exam']['id']);
		$this->set('exam', $exam);
		if($assigneds['Assigned']['status']=="contestado"){
		
			$this->flash(__("Ex&aacute;men ya realizado. No se puede volver a contestar.",true),array('action'=>'index'));
		}else
		if (!empty($this->data)) {
			
			$this->Answer->create();
			if ($this->Answer->saveAll($this->data['Answer'])) {
				$totalPuntos=0;
				$puntosAlumno=0;
				foreach($this->data['Answer'] as $key=> $answer){
					$question = $exam['Question'][$key];
					$totalPuntos +=  $question['puntuacion']; // hash  esta es la puntuacion del examen
					
					$puntosAlumno += $answer['resp_alumno']==$question['Resp_Correc']?$question['puntuacion']:0.0;
				}
				$calificacion = round((10/$totalPuntos)*$puntosAlumno,2);
				
				$assigneds['Assigned']['calificacion']=$calificacion;
				$assigneds['Assigned']['status']='contestado';
				
				
				$this->Answer->Assigned->save($assigneds['Assigned']);
				
				//$this ->Answer->Assigned-> 
				$this->flash(__("Su ex&aacute;men ha sido guardado. Tu calificaci&oacute;n es <i>".$calificacion."</i>", true), array('action' => 'index'));
			} else {
			}
			
		}
		
		
		//$assigneds = $this->Answer->Assigned->find('list');
		$this->set(compact('questions', 'assigneds'));
		//$this->loadModel('Question'); 		
		//$this->set('question', $this->Question->read(null, 1));
		
		//echo var_dump($assigneds);
		$this-> set('idAssigned',$idAssigned);
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->flash(sprintf(__('Invalid answer', true)), array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Answer->save($this->data)) {
				$this->flash(__('The answer has been saved.', true), array('action' => 'index'));
			} else {
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Answer->read(null, $id);
		}
		$questions = $this->Answer->Question->find('list');
		$assigneds = $this->Answer->Assigned->find('list');
		$this->set(compact('questions', 'assigneds'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->flash(sprintf(__('Invalid answer', true)), array('action' => 'index'));
		}
		if ($this->Answer->delete($id)) {
			$this->flash(__('Answer deleted', true), array('action' => 'index'));
		}
		$this->flash(__('Answer was not deleted', true), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}
}
