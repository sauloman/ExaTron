<?php
class User extends AppModel {
	var $name = 'User';
	var $useTable = 'user';
	var $displayField = 'nombre';
	function hashPasswords($data) {        
		if (isset($data['User']['password'])) {           
			$data['User']['password'] = md5($data['User']['password']);           
			return $data;        
		}        
		return $data;    
	}
	
}
