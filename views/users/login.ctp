<?php    

echo 'Bienvenido </br>';
echo 'Introduce tus datos';

echo $this->Session->flash('auth'); 
echo $this->Form->create('User');
echo $this->Form->input('matricula');  
echo $this->Form->input('password');
echo $this->Form->end('Login');?>