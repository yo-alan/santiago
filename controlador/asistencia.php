<?php

	include '../modelo/conexion.class.php';
	
	if($_SERVER['REQUEST_METHOD'] == 'GET' && !isset($_GET['action']))
		header("Location: ../index.php");
	
	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		$accion = $_GET['action'];
		
		switch($accion)
		{
			case 'listar':
				// Corregir con la vista correcta (pendiente)
				header('Location: ../vista/index.php?modulo=listado');
				break;
			case 'editar':
				// Corregir con la vista correcta
				include('../vista/modulos/form-asistencia.php');
			default:
				header('Location: ../index.php');
		}

		die();

	}
	
	if(!isset($_POST['action']))
		header("Location: ../index.php");
	
	$accion = $_POST['action'];

	if($accion == 'editar')
		echo "editar";
	if($accion == 'listar')
		echo "listar";
	else{
		header("Location: ../index.php");
		die();
	}
	
	header("Location: ../index.php?result=exito");
	die();