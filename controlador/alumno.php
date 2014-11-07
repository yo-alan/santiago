<?php
	include '../modelo/conexion.class.php';
    include '../modelo/alumno.class.php';
	
	if($_SERVER['REQUEST_METHOD'] == 'GET' && !isset($_GET['action']))
		header("Location: ../index.php");
	
	if($_SERVER['REQUEST_METHOD'] == 'GET'){
        
		$accion = $_GET['action'];
        switch($accion){
            case 'agregar':     include('../vista/modulos/form-alumno.php');
                break;
            case 'editar':      include('../vista/modulos/form-alumno.php');
                break;
            case 'eliminar':    include('../vista/modulos/form-alumno.php');
                break;
            case 'listar':      
                                $carrera=['ENF','RED','SFW'];
                                $anios=['2009','2010','2011','2012','2013','2014']; 
                                if(isset($_GET['filtroCursada']) && isset($_GET['filtroCarrera'])){
                        $as=Alumno::alumnosXcursada($_GET['filtroCursada'],$_GET['filtroCarrera']);
                                }else{
                                $as=array();
                                }
                                include('../vista/modulos/listadoAlumno.php');
                break;
            default:            header("Location: ../index.php");
                break;
        }
	}
	
	/*if(!isset($_POST['action']))
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
	*/
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

    function aniosHastaFecha(){
        return $anios=['2009','2010','2011','2012','2013','2014'];
    }
