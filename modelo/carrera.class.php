<?php

include "conexion.class.php";

class Carrera {
	
	private $cambios;
	private $nuevo;
	private $id_carrera;
	private $nombre;
	
	function __construct(){
		
		$this->cambios = true;
		$this->nuevo = true;
		$this->id_carrera = "";
		$this->nombre = "";
		
	}
	
	//INICIO METODOS ESTATICOS
	
	static function carrera($id_carrera="", $nombre=""){
		//METODO ESTATICO QUE DEVUELVE UNA CURSADA ESPECIFICA
		
		$c = new Carrera();
		
		if($id_carrera == "" || $nombre == "")
			return $c;
		
		
		
	}
	
	static function carreras(){
		//METODO ESTATICO QUE DEVUELVE TODAS LAS CARRERAS DE LA BASE
		
		
	}
	
	//INICIO METODOS DE CLASE
	
	function guardar(){
		//METODO QUE GUARDA UNA NUEVA CARRERA O ACTUALIZA UNA EXISTENTE
		
		if(!$this->cambios)
			return;
		
		$conn = new Conexion();
		
		if($this->nuevo){
			
			try{
				$sql = "INSERT INTO carrera(id_carrera, nombre) VALUES(:id_carrera, :nombre)";
				
				$stmt = $conn->prepare($sql);
				
				$stmt->bindParam(':id_carrera', $this->id_carrera, PDO::PARAM_STR);
				$stmt->bindParam(':nombre', $this->nombre, PDO::PARAM_STR);
				
				$stmt->execute();
				
			} catch(PDOException $e){
				echo "ERROR: ", $e->getMessage();
				die();
			}
			
		}
	}
	
	function eliminar(){
		//METODO QUE ELIMINA UNA CARRERA DE LA BASE
		
		
		
	}
	
	
	//INICIO GETTERS Y SETTERS
	
	function getId_carrera(){
		return $this->id_carrera;
	}
	
	function setId_carrera($id_carrera){
		$this->id_carrera = $id_carrera;
	}
	
	function getNombre(){
		return $this->nombre;
	}
	
	function setNombre($nombre){
		$this->nombre = $nombre;
	}
	
}
