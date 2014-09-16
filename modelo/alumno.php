<?php

class Alumno(){
	
	private var $nombre = "";
	private var $apellido = "";
	private var $fechaNacimiento = "";
	private var $direccion = "";
	private var $documento = 0;
	private var $legajo = "";
	
	function Alumno(){
		
		
	}
	
	function getNombre(){
		return this->nombre;
	}
	
	function setNombre(string $nombre){
		$this->nombre = $nombre;
	}
	
	function getApellido(){
		return this->apellido;
	}
	
	function setApellido(string $apellido){
		$this->apellido = $apellido;
	}
	
	function getFechaNacimiento(){
		return this->fechaNacimiento;
	}
	
	function setFechaNacimiento(string $fechaNacimiento){
		$this->fechaNacimiento = $fechaNacimiento;
	}
	
	function getDireccion(){
		return this->direccion;
	}
	
	function setDireccion(string $direccion){
		$this->direccion = $direccion;
	}
	
	function getDocumento(){
		return this->documento;
	}
	
	function getLegajo(){
		return this->Legajo;
	}
	
	
	
	
	
	
}
