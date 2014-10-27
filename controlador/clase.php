<?php
	if($_SERVER['REQUEST_METHOD'] == 'GET' && !isset($_GET['action']))
		header("Location: ../index.php");
	
	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		$accion = $_GET['action'];
		if($accion == 'agregar'){
			header('Location: ../vista/modulos/form-clase.php');
		}else if($accion == 'editar'){
			include('../vista/modulos/form-clase.php');
		}else if($accion == 'eliminar'){
			include('../vista/modulos/form-clase.php');
        }else if($accion == 'listar'){
			include "../modelo/clase.class.php";
			$cs = Clase::clases();
			include "../vista/modulos/list-clase.php";
			//header('Location: ../vista/index.php?modulo=list-clase');
		}else
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
		
		include "../modelo/clase.class.php";
		$c = new Clase();
		
		$c->setObligatorio($_POST['obligatorio']);
		$c->setHora_inicio($_POST['hora_inicio']);
		$c->setHora_fin($_POST['hora_fin']);
		$c->setAula($_POST['aula']);
		$c->setDictada($_POST['dictada']);
		$c->setRecuperatoria_de($_POST['recuperatoria_de']);
		$c->setComision($_POST['comision']);
		$c->setProfesor($_POST['profesor']);
		$c->setHora_ingreso_profesor($_POST['hora_ingreso_profesor']);
		$c->setHora_salida_profesor($_POST['hora_salida_profesor']);
		
		try{
			$c->guardar();
		} catch(Exception $e){
			header("Location: ../vista/modulos/msmError.php?msg=". $e->getMessage());
			die();
		}
			header ('Location: ../vista/modulos/msmExito.php');
			die();
	}
