<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	include '../modelo/conexion.class.php';
    include '../modelo/comision.class.php';
    include '../modelo/cursada.class.php';
    require_once '../modelo/alumno.class.php';

    $tituloModulo='Bedel&iacute;a | Gestionar Alumnos de Comisi&oacute;n';
    $miJs='<script src="../librerias/js/alumnosComision.js"></script>';

	if($_SERVER['REQUEST_METHOD'] == 'GET' && !isset($_GET['action']))
		header("Location: ../index.php");
	
	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		$accion = $_GET['action'];
		
         switch($accion){
            case 'agregar':     $cp = Cursada::cursadas();
                                include "../vista/modulos/agregarComision.php";
                break;
            case 'editar':      include('../vista/modulos/form-cursada.php');
                break;
            case 'eliminar':    include('../vista/modulos/form-cursada.php');
                break;
            case 'listar':      $cp = Comision::comisiones();
                                include '../vista/modulos/list-comision.php';
                break;
            case 'addAlumno':   
                                $breadcrumb='<ol class="breadcrumb col-md-12">
                                              <li><a href="../index.php">Inicio</a></li>
                                              <li><a href="../controlador/comision.php?action=listar">Listado Comisiones</a></li>
                                              <li class="active">Gestionar Alumnos</li>
                                            </ol>';
                                if( isset($_GET['comision']) && ($_GET['comision']!='') ){
                                    $c=$_GET['comision'];
                                    $com=Comision::comision($_GET['comision']);
                                    $aluEnCom=Alumno::alumnosEnComision($c);
                                    $aluSinCom=Alumno::alumnoSinComision();
                                    include '../vista/modulos/form-alumnosComision.php';
                                }else{
                                    echo 'no hay comision';
                                }
                break;
            case 'print':
                break;
            default:            header("Location: ../index.php");
                break;
        }
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
