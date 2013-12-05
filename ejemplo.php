<?php
	require_once('usuariosModel.php');
	#Traer los datos de un usuario 
	$usuario1 = new Usuario(); 
	$usuario1->get('A01224787'); 
	print ' existe<br>'; 
?>