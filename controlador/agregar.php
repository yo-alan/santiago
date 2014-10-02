<?php
	if($_SERVER['REQUEST_METHOD'] == 'GET')
		header("Location: ../index.php");
	
	include "../modelo/alumno.class.php";
	
	$a = new Alumno();
	
	$a->setNombre($_POST['nombre']);
	$a->setApellido($_POST['apellido']);
	$a->setF_nacimiento($_POST['f_nacimiento']);
	$a->setDireccion($_POST['direccion']);
	$a->setDocumento($_POST['documento']);
	$a->setLegajo($_POST['legajo']);
	
	try{
		$a->guardar();
	} catch(Exception $e){
		header("Location: ../index.php?result=error");
		die();
	}
	
	header("Location: ../index.php?result=exito");
	die();
