<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
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
			case 'registrar':
				
				include('../modelo/alumno.class.php');
				include('../modelo/clase.class.php');
				
				$as = array();
				//$as = Clase::getAlumnos();
				
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

	if($accion == 'registrar')
		registrar();
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

	function registrar(){
		
		include "../modelo/asistencia.class.php";
		
		for($i = 0; $i < sizeof($_POST)-1; $i++){
			
			$a = new Asistencia();
			
			$a->setAlumno($_POST['alumno'. $i]['documento']);
			$a->setPresente(isset($_POST['alumno'. $i]['presente']) ? 1 : 0);
			$a->setJustificada($_POST['alumno'. $i]['justificada']);
			
			$a->guardar();
			
		}
		
		die();
		
	}
