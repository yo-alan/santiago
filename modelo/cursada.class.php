<?php

include "conexion.class.php";

class Cursada {
	
	private $cambios;
	private $nuevo;
	private $id_carrera;
	private $materia;
	private $anio;
	private $f_inicio;
	private $f_fin;
	private $cuatrimestre;
	private $porc_asistencia;
	
	function __construct(){
		
		$this->cambios = true;
		$this->nuevo = true;
		$this->id_carrera = "";
		$this->materia = 0;
		$this->anio = 0;
		$this->f_inicio = "";
		$this->f_fin = "";
		$this->cuatrimestre = 0;
		$this->porc_asistencia = 0.0;
		
	}
	
	//INICIO METODOS ESTATICOS
	
	static function cursada($id_carrera="", $materia=0, $anio=0){
		//METODO ESTATICO QUE DEVUELVE UNA CURSADA ESPECIFICA
		
		$c = new Cursada();
		
		if($id_carrera == "" || $materia == 0 || $anio == 0)
			return $c;
		
		
		
	}
	
	static function cursadas(){
		//METODO ESTATICO QUE DEVUELVE TODAS LAS CURSADAS DE LA BASE
		
		
	}
	
	//INICIO METODOS DE CLASE
	
	function guardar(){
		//METODO QUE GUARDA UNA NUEVA CURSADA O ACTUALIZA UNA EXISTENTE
		
		if(!$this->cambios)
			return;
		
		$conn = new Conexion();
		
		if($this->nuevo){
			
			try{
				$sql = 'INSERT INTO cursada(id_carrera, materia, anio, f_inicio, f_fin, cuatrimestre, porc_asistencia)
						VALUES(:id_carrera, :materia, :anio, :f_inicio, :f_fin, :cuatrimestre, :porc_asistencia)';
				
				$consulta = $conn->prepare($sql);
				  
				$consulta->bindParam(':id_carrera', $this->id_carrera, PDO::PARAM_STR);
				$consulta->bindParam(':materia', $this->materia, PDO::PARAM_INT);
				$consulta->bindParam(':anio', $this->anio, PDO::PARAM_INT);
				$consulta->bindParam(':f_inicio', $this->f_inicio, PDO::PARAM_STR);
				$consulta->bindParam(':f_fin', $this->f_fin, PDO::PARAM_STR);
				$consulta->bindParam(':cuatrimestre', $this->cuatrimestre, PDO::PARAM_INT);
				$consulta->bindParam(':porc_asistencia', $this->porc_asistencia, PDO::PARAM_STR);
				
				$consulta->execute();
				
			}catch(PDOException $e){
				throw new Exception('Error al insertar la nueva cursada: '.$e->getMessage());
			}
		}
		else{
			
			
			
		}
		
	}
	
	function eliminar(){
		
		
	}
	
	
	//INICIO GETTERS Y SETTERS
	
	function getId_carrera(){
		return $this->id_carrera;
	}
	
	function setId_carrera($id_carrera){
		$this->id_carrera = $id_carrera;
	}
	
	function getMateria(){
		return $this->materia;
	}
	
	function setMateria($materia){
		$this->materia = $materia;
	}
	
	function getAnio(){
		return $this->anio;
	}
	
	function setAnio($anio){
		$this->anio = $anio;
	}
	
	function getF_inicio(){
		return $this->f_inicio;
	}
	
	function setF_inicio($f_inicio){
		$this->f_inicio = $f_inicio;
	}
	
	function getF_fin(){
		return $this->f_fin;
	}
	
	function setF_fin($f_fin){
		$this->f_fin = $f_fin;
	}
	
	function getCuatrimestre(){
		return $this->cuatrimestre;
	}
	
	function setCuatrimestre($cuatrimestre){
		$this->cuatrimestre = $cuatrimestre;
	}
	
	function getPorc_asistencia(){
		return $this->porc_asistencia;
	}
	
	function setPorc_asistencia($porc_asistencia){
		$this->porc_asistencia = $porc_asistencia;
	}
	
}
