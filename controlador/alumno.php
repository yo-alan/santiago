<?php
	
	if($_SERVER['REQUEST_METHOD'] == 'GET' && !isset($_GET['action']))
		header("Location: ../index.php");
	
	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		$accion = $_GET['action'];
		
		if($accion == 'agregar')
			include('../vista/modulos/form-alumno.php');
		else if($accion == 'editar')
			include('../vista/modulos/form-alumno.php');
		else if($accion == 'eliminar')
			include('../vista/modulos/form-alumno.php');
		else
			header("Location: ../index.php");
		
		die();
	}
	
	if(!isset($_POST['action']))
		header("Location: ../index.php");
	
	$accion = $_POST['action'];
	
	if($accion == 'agregar')
		require 'agregar.php';
	if($accion == 'editar')
		require 'editar.php';
	if($accion == 'eliminar')
		require 'eliminar.php';
	else
		header("Location: ../index.php");
	
