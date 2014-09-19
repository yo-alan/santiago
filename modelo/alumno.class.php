<?php

include "conexion.class.php";

class Alumno{
	
	private var $_nuevo;
	private var $_cambios;
	private var $nombre;
	private var $apellido;
	private var $documento;
	private var $fechaNacimiento;
	private var $direccion;
	private var $legajo;
	
	function __construct(){
		$this->_nuevo = true;
		$this->_cambios = true;
		$this->nombre = "";
		$this->apellido = "";
		$this->documento = 0;
		$this->fechaNacimiento = "";
		$this->direccion = "";
		$this->legajo = "";
	}
	
	//INICIO METODOS ESTATICOS
	
	function static alumnos(){
		//Metodo estatico que retorna el listado de alumnos en la base
		
		
		
	}
	
	function static alumno($legajo){
		//Metodo estatico que retorna un alumno que posea el $legajo
		
		
		
		
	}
	
	//INICIO METODOS DE CLASE
	
	function guardar(){
		//Metodo de clase que guarda un alumno en la base
		$conn = new Conexion();
		
		
		
	}
	
	function eliminar(){
		//Metodo de clase que elimina un alumno de la base
		
		
	}
	
	//INICIO METODOS GETTERS Y SETTERS
	
	function getNombre(){
		return $this->nombre;
	}
	
	function setNombre($nombre){
		$this->nombre = $nombre;
	}
	
	function getApellido(){
		return $this->apellido;
	}
	
	function setApellido($apellido){
		$this->apellido = $apellido;
	}
	
	function getFechaNacimiento(){
		return $this->fechaNacimiento;
	}
	
	function setFechaNacimiento($fechaNacimiento){
		$this->fechaNacimiento = $fechaNacimiento;
	}
	
	function getDireccion(){
		return $this->direccion;
	}
	
	function setDireccion($direccion){
		$this->direccion = $direccion;
	}
	
	function getDocumento(){
		return $this->documento;
	}
	
	function setDocumento($documento){
		$this->documento = $documento;
	}
	
	function getLegajo(){
		return $this->Legajo;
	}
	
	function setLegajo($legajo){
		$this->documento = $documento;
	}
	
}
