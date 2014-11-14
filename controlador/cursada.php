<?php
	
	include_once '../modelo/conexion.class.php';
    
    $miJs='<script src="../librerias/js/selectCursada.js"></script>';

	if($_SERVER['REQUEST_METHOD'] == 'GET' && !isset($_GET['action']))
		header("Location: ../index.php");
	
	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		$accion = $_GET['action'];
		if($accion == 'agregar'){
            $tituloModulo='Bedel&iacute;a | Agregar cursada';
			include ('../vista/modulos/form-cursada.php');
		}else if($accion == 'editar'){
			include('../vista/modulos/form-cursada.php');
		}else if($accion == 'eliminar'){
			include('../vista/modulos/form-cursada.php');
        }else if($accion == 'listar'){
            $tituloModulo='Bedel&iacute;a | Listado de cursada';
			include_once "../modelo/cursada.class.php";
			include_once "../modelo/comision.class.php";
			$cp = Cursada::cursadas();
			$c1 = Comision::comisiones();
			include "../vista/modulos/list-cursada.php";
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
		
		include_once "../modelo/cursada.class.php";
		$c = new Cursada();
		
		$c->setId_carrera($_POST['carrera']);
		$c->setMateria($_POST['materia']);
		$c->setAnio($_POST['anio']);
		$c->setF_inicio($_POST['inicio']);
		$c->setF_fin($_POST['fin']);
		$c->setCuatrimestre($_POST['cuatrimestre']);
		
		try{
			$c->guardar();
			
			
		} catch(Exception $e){
			header("Location: ../vista/modulos/msmError.php?msg=". $e->getMessage());
			die();
		}
		header ('Location: ../vista/modulos/msmExito.php');
		die();
	}
?>
