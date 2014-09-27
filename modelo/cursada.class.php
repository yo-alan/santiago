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
		
		if($this->id_carrera == "")
			throw new Exception("La carrera no es válida.");
		
		if($this->materia == 0)
			throw new Exception("La materia no es válida.");
		
		if($this->anio == 0)
			throw new Exception("El año no es válido.");
		
		if($this->f_inicio == "")
			throw new Exception("La fecha de inicio no es válida.");
		
		if($this->f_fin == "")
			throw new Exception("La fecha de finalización no es válida.");
		
		if($this->porc_asistencia < 0)
			throw new Exception("Ocurrió un error.");
		
		$conn = new Conexion();
		
		if($this->nuevo){
			
			try{
				$conn->beginTransaction();
				
				$sqlCursada = "INSERT INTO cursada(id_carrera, materia, anio, f_inicio, f_fin, cuatrimestre, porc_asistencia)
				VALUES($this->id_carrera,$this->materia,$this->anio,$this->f_inicio,$this->f_fin,$this->cuatrimestre,$this->porc_asistencia)";
											
				$afectados = $conn->exec($sqlCursada);
				
				$conn->commit();	

			}catch(PDOException $e){
				$conn->rollBack();
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
		
		$carreras = array("SFW", "RED", "ENF");
		
		if(!in_array($id_carrera, $carreras))
			return;
		
		$this->id_carrera = $id_carrera;
		$this->cambios = true;
	}
	
	function getMateria(){
		return $this->materia;
	}
	
	function setMateria($materia){
		
		//VALIDAR LAS MATERIAS POR CARRERA
		
		$this->materia = $materia;
		$this->cambios = true;
	}
	
	function getAnio(){
		return $this->anio;
	}
	
	function setAnio($anio){
		
		if($anio > 3 && $anio < 1)
			return;
		
		$this->anio = $anio;
		$this->cambios = true;
	}
	
	function getF_inicio(){
		return $this->f_inicio;
	}
	
	function setF_inicio($f_inicio){
		
		//SI LA FECHA DE INICIO ES MAYOR A LA FECHA DE FIN (SIEMPRE QUE NO SEA NULA) RETURN
		
		$this->f_inicio = $f_inicio;
		$this->cambios = true;
	}
	
	function getF_fin(){
		return $this->f_fin;
	}
	
	function setF_fin($f_fin){
		
		//SI LA FECHA DE FIN ES MAYOR A LA FECHA DE FIN (SIEMPRE QUE NO SEA NULA) RETURN
		
		$this->f_fin = $f_fin;
		$this->cambios = true;
	}
	
	function getCuatrimestre(){
		return $this->cuatrimestre;
	}
	
	function setCuatrimestre($cuatrimestre){
		
		if($cuatrimestre != 1 || $cuatrimestre != 2)
			return;
		
		$this->cuatrimestre = $cuatrimestre;
		$this->cambios = true;
	}
	
	function getPorc_asistencia(){
		return $this->porc_asistencia;
	}
	
	function setPorc_asistencia($porc_asistencia){
		
		//DEBERIA SER UN VALOR CALCULADO EN EL CONTROLADOR.
		
		$this->porc_asistencia = $porc_asistencia;
		$this->cambios = true;
	}
	
}
