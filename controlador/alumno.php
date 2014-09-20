<?php
	
	include "modelo/alumno.class.php";
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		if(empty($_POST))
			header("Location: ../index.php");
		
		$a = new Alumno();
		
		$a->setNombre($_POST['nombre']);
		$a->setApellido($_POST['apellido']);
		$a->setF_nacimiento($_POST['f_nacimiento']);
		$a->setDireccion($_POST['direccion']);
		$a->setDocumento($_POST['documento']);
		
		try{
			$a->guardar();
		} catch(Exception $e){
			header("Location: ../index.php");
		}
		
		//~ echo "CARRERA: ". $a->getNombre(). "<br>";
		//~ echo "MATERIA: ". $a->getApellido(). "<br>";
		//~ echo "ANIO: ". $a->getF_nacimiento(). "<br>";
		//~ echo "FIN: ". $a->getDocumento(). "<br>";
		//~ echo "INICIO: ". $a->getDireccion(). "<br>";
		//~ echo "CUATRIMESTRE: ". $a->getDocumento(). "<br>";
		
		header("Location: ../index.php");
	}
