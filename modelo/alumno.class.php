<?php

include "conexion.class.php";

class Alumno{
	
	private $nuevo;
	private $cambios;
	private $nombre;
	private $apellido;
	private $documento;
	private $f_nacimiento;
	private $legajo;
	private $direccion;
	
	function __construct(){
		$this->nuevo = true;
		$this->cambios = true;
		$this->nombre = "";
		$this->apellido = "";
		$this->documento = 0;
		$this->f_nacimiento = "";
		$this->legajo = "";
		$this->direccion = "";
	}
	
	//INICIO METODOS ESTATICOS
	
	static function alumnos(){
		//Metodo estatico que retorna el listado de alumnos en la base
		
		
		
	}
	
	static function alumno($legajo){
		//Metodo estatico que retorna un alumno que posea el $legajo
		
		
		
		
	}
	
	//INICIO METODOS DE CLASE
	
	function guardar(){
		//Metodo de clase que guarda un alumno en la base
		
		if(!$this->cambios)//Si no hay cambios en el objeto
			return;
		
		if($this->nombre == "")
			throw new Exception("El nombre no es válido.");
		
		if($this->apellido == "")
			throw new Exception("El apellido no es válido.");
		
		if($this->documento == 0)
			throw new Exception("El documento no es válido.");
		
		$conn = new Conexion();
		
		if($this->nuevo){//Si el objeto es nuevo se hace un INSERT
			
			try{
				$sql = "INSERT INTO persona(nombre, apellido, documento, f_nacimiento, direccion)
						VALUES(:nombre, :apellido, :documento, :f_nacimiento, :direccion)";
				
				$stmt = $conn->prepare($sql);
				
				$stmt->bindParam(':nombre', $this->nombre, PDO::PARAM_STR);
				$stmt->bindParam(':apellido', $this->apellido, PDO::PARAM_STR);
				$stmt->bindParam(':documento', $this->documento, PDO::PARAM_INT);
				$stmt->bindParam(':f_nacimiento', $this->f_nacimiento, PDO::PARAM_STR);
				$stmt->bindParam(':direccion', $this->direccion, PDO::PARAM_STR);
				
				$stmt->execute();
				
			} catch(PDOException $e){
				throw new Exception("No me pude guardar como persona: ". $e->getMessage());
			}
			
			try{
				$sql = "INSERT INTO alumno(documento, legajo)
						VALUES(:documento, :legajo)";
				
				$stmt = $conn->prepare($sql);
				
				$stmt->bindParam(':documento', $this->documento, PDO::PARAM_INT);
				$stmt->bindParam(':legajo', $this->legajo, PDO::PARAM_STR);
				
				$stmt->execute();
				
			} catch(PDOException $e){
				throw new Exception("No me pude guardar como alumno: ". $e->getMessage());
			}
			
		}
		else{//Si el objeto no es nuevo se hace un UPDATE
			
			
			
			
		}
		
	}
	
	function eliminar(){
		//Metodo de clase que elimina un alumno de la base
		
		
	}
	
	//INICIO METODOS GETTERS Y SETTERS
	
	function getNombre(){
		return $this->nombre;
	}
	
	function setNombre($nombre){
		
		if()
		
		$this->nombre = $nombre;
		$this->cambios = true;
	}
	
	function getApellido(){
		return $this->apellido;
	}
	
	function setApellido($apellido){
		$this->apellido = $apellido;
		$this->cambios = true;
	}
	
	function getDocumento(){
		return $this->documento;
	}
	
	function setDocumento($documento){
		$this->documento = $documento;
		$this->cambios = true;
	}
	
	function getF_nacimiento(){
		return $this->f_nacimiento;
	}
	
	function setF_nacimiento($f_nacimiento){
		$this->f_nacimiento = $f_nacimiento;
		$this->cambios = true;
	}
	
	function getLegajo(){
		return $this->legajo;
	}
	
	function setLegajo($legajo){
		$this->legajo = $legajo;
		$this->cambios = true;
	}
	
	function getDireccion(){
		return $this->direccion;
	}
	
	function setDireccion($direccion){
		$this->direccion = $direccion;
		$this->cambios = true;
	}
	
}
