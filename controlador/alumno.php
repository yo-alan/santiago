<?php
	
	if($_SERVER['REQUEST_METHOD'] == 'GET' && !isset($_GET['action']))
		header("Location: ../index.php");
	
	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		$accion = $_GET['action'];
		
		if($accion == 'agregar')
			//include('../vista/modulos/form-alumno.php');
			header ('Location: ../vista/modulos/form-alumno.php');
		else if($accion == 'editar')
			include('../vista/modulos/form-alumno.php');
		else if($accion == 'eliminar')
			include('../vista/modulos/form-alumno.php');
        else if($accion == 'listar')
			header('Location: ../vista/index.php?modulo=mostrarListado');
		else
			header("Location: ../index.php");
		
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
	
	function agregar(){
		
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
			header("Location: ../vista/modulos/msmErrorAlumno.php?msg".$e->getMessage());
			die();
		}
		header ('Location: ../vista/modulos/msmExitoAlumno.php');
		die();
	}
