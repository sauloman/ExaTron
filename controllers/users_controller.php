<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $helpers = array ('Html');
	var $components = array('Auth'); 
	
	function login() {    }    
	
	function logout() {    
	$this->redirect($this->Auth->logout()); 
	}

	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->flash(__('Invalid user', true), array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->flash(__('User saved.', true), array('action' => 'index'));
			} else {
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->flash(sprintf(__('Invalid user', true)), array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->flash(__('The user has been saved.', true), array('action' => 'index'));
			} else {
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->flash(sprintf(__('Invalid user', true)), array('action' => 'index'));
		}
		if ($this->User->delete($id)) {
			$this->flash(__('User deleted', true), array('action' => 'index'));
		}
		$this->flash(__('User was not deleted', true), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}
}