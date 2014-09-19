<?php
	
	include "../modelo/cursada.class.php";
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		if(empty($_POST)){
			header("Location: ../index.php");
			die();
		}
		
		echo "CARRERA". $_POST['carrera']. "<br>";
		echo "MATERIA". $_POST['materia']. "<br>";
		echo "ANIO". $_POST['anio']. "<br>";
		echo "FIN". $_POST['fin']. "<br>";
		echo "INICIO". $_POST['inicio']. "<br>";
		echo "CUATRIMESTRE". $_POST['cuatrimestre']. "<br>";
	}
	
	
	
