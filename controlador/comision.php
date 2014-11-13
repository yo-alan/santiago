<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	include '../modelo/conexion.class.php';
    include '../modelo/comision.class.php';
    include '../modelo/cursada.class.php';
    require_once '../modelo/alumno.class.php';

    $tituloModulo='Bedel&iacute;a | Gestionar Alumnos de Comisi&oacute;n';
    $miJs='<script src="../librerias/js/alumnosComision.js"></script>';

	if( ($_SERVER['REQUEST_METHOD'] == 'GET') && isset($_GET['action']) ){
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
                                    
                                    /*validacion de 30 Alumnos,uso 7 como limite de prueba*/
                                    if(count($aluEnCom) < 7){
                                        $tituloTabla='Alumnos en esta comisi&oacute;n';
                                        $clase='col-md-6';
                                        $mostrarTabla=true;
                                        $aluSinCom=Alumno::alumnoSinComision();
                                    }else{
                                        $tituloTabla='Alumnos en esta comisi&oacute;n(COMISION COMPLETA)';
                                        $clase='col-md-12';
                                        $mostrarTabla=false;
                                    }
                                    
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
	}else{
    
        if( ($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['action']) ){
            
            $accion = $_POST['action'];

            switch($accion){
                case 'agregar':         agregar();
                    break;
                case 'editar':
                    break;
                case 'eliminar':
                    break;
                case 'agregarAlumno': 
                                        if( isset($_POST['addAlumno']) && isset($_POST['addComision']) ){
                                            $alumno=$_POST['addAlumno'];
                                            $comision=$_POST['addComision'];
                                            $newAlumno= new Comision();
                                            $newAlumno->guardarAlumnoEnComision($comision,$alumno);
                                        }
                    break;
                case 'quitarAlumno': 
                                        if( isset($_POST['rmAlumno']) && isset($_POST['rmComision']) ){
                                            $alumno=$_POST['rmAlumno'];
                                            $comision=$_POST['rmComision'];
                                            $newAlumno= new Comision();
                                            $newAlumno->quitarAlumnoEnComision($comision,$alumno);
                                        }
                    break;
                default:                header("Location: ../index.php");
                                        die();
                    break;
            }
            header('Location: ?action=addAlumno&comision=2');
        }else{
            //echo 'redirijo a index';
            header("Location: ../index.php");
        }
    }

	
	//header("Location: ../index.php?result=exito");
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
