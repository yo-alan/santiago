<?php
	
	include "modelo/cursada.class.php";
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		if(empty($_POST))
			header("Location: ../index.php");
		
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
			header("Location: ../index.php");
		}
		
		//~ echo "CARRERA: ". $c->getId_carrera(). "<br>";
		//~ echo "MATERIA: ". $c->getMateria(). "<br>";
		//~ echo "ANIO: ". $c->getAnio(). "<br>";
		//~ echo "FIN: ". $c->getF_fin(). "<br>";
		//~ echo "INICIO: ". $c->getF_inicio(). "<br>";
		//~ echo "CUATRIMESTRE: ". $c->getCuatrimestre(). "<br>";
		
		header("Location: ../index.php");
	}
