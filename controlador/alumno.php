<?php
	
	include "../modelo/alumno.class.php";
	
	if($_SERVER[REQUEST_METHOD] == 'POST'){
		
		if(empty($_POST)){
			require "../index.php";
			die();
		}
		
		var_dump($_POST);
	}
