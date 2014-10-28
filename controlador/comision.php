<?php
	
	if($_SERVER['REQUEST_METHOD'] == 'GET' && !isset($_GET['action']))
		header("Location: ../index.php");
	
	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		$accion = $_GET['action'];
		
		if($accion == 'agregar'){
			include "../modelo/cursada.class.php";
			$cs = New Cursada();
			$cp = $cs->cursadas();
			include "../vista/modulos/agregarComision.php";
			//header ('Location: ../vista/modulos/form-cursada.php');
		}else if($accion == 'editar')
			include('../vista/modulos/form-cursada.php');
		else if($accion == 'eliminar')
			include('../vista/modulos/form-cursada.php');
		else if($accion == 'listar'){
			include '../modelo/comision.class.php';
			$cs = New Comision;
			$cp = $cs->comisiones();
			include '../vista/modulos/list-comision.php';
			
		}
		else
			header("Location: ../index.php");
		
		die();
	}
	
	if(!isset($_POST['action']))
		header("Location: ../index.php");
	
	$accion = $_POST['action'];
	
	if($accion == 'agregar'){
		agregar();
	}else if($accion == 'editar')
		echo "editar";
	else if($accion == 'eliminar')
		echo "eliminar";
	else{
		header("Location: ../index.php");
		die();
	}
	
	header("Location: ../index.php?result=exito");
	die();
	
	function agregar(){
		
		include "../modelo/comision.class.php";
		
		
		$c = new Comision();
		
		$c->setCarrera($_POST['carrera']);
		$c->setMateria($_POST['materia']);
		$c->setAnio($_POST['anio']);
		$c->setNumero($_POST['numero']);
		
		try{
			$c->guardar();
			
		} catch(Exception $e){
			header("Location: ../vista/modulos/msmErrorComision.php?msg=". $e->getMessage());
			die();
		}
		
		header ('Location: ../vista/modulos/msmExitoComision.php');
		die();
	}
