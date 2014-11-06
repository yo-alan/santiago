<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	include '../modelo/conexion.class.php';
	
	if($_SERVER['REQUEST_METHOD'] == 'GET' && !isset($_GET['action']))
		header("Location: ../index.php");
	
	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		$accion = $_GET['action'];
		
		switch($accion)
		{
			case 'agregar':
				// Corregir con la vista correcta
				header('Location: ../vista/modulos/form-asistencia.php');
				break;
			case 'eliminar':
				// Corregir con la vista correcta
				include('../vista/modulos/form-asistencia.php');
				break;
			case 'listar':
				include('../modelo/asistencia.class.php');
				
				$as = Asistencia::asistencias();
				
				include('../vista/modulos/asistencia.php');
				break;
			case 'editar':
				// Corregir con la vista correcta
				include('../vista/modulos/form-asistencia.php');
				break;
			default:
				header('Location: ../index.php');
		}

		die();

	}
	
	if(!isset($_POST['action']))
		header("Location: ../index.php");
	
	$accion = $_POST['action'];

	if($accion == 'agregar')
		agregar();
	if($accion == 'editar')
		echo "editar";
	if($accion == 'eliminar')
		echo "eliminar";
	else{
		header("Location: ../index.php");
		die();
	}
	
	header("Location: ../index.php?result=exito");
	die();

	/*function agregar(){

	}*/
