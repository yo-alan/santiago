<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
	include_once "../modelo/clase.class.php";
	if($_SERVER['REQUEST_METHOD'] == 'GET' && !isset($_GET['action']))
		header("Location: ../index.php");
	
	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		$accion = $_GET['action'];
		if($accion == 'agregar'){
			$miJs = "";
			$tituloModulo = "Bedelía | Agregar clase nueva";
			
			$comision = "";
			
			if(isset($_GET["comision"]))
				$comision = $_GET["comision"];
			
			include '../vista/modulos/form-clase.php';
		}else if($accion == 'editar'){
			include('../vista/modulos/form-clase.php');
		}else if($accion == 'eliminar'){
			include('../vista/modulos/form-clase.php');
        }else if($accion == 'seleccionarComision'){
			include_once "../modelo/comision.class.php";
			
			$miJs = "";
			$tituloModulo = "Bedelía | Seleccionar una comision";
			
			$cs = Comision::comisiones();
			
			include "../vista/modulos/seleccionarComision.php";
			
        }else if($accion == 'listar'){
			include_once "../modelo/clase.class.php";
			$cs = Clase::clases();
			include "../vista/modulos/list-clase.php";
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
	
	die();

	function agregar(){
		
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
			
			header('Location: ../vista/modulos/msmExito.php');
		} catch(Exception $e){
			header("Location: ../vista/modulos/msmError.php?msg=". $e->getMessage());
		}
		
		die();
	}
