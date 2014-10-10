<?php

include "conexion.class.php";

class Comision {
	
	private $cambios;
	private $nuevo;
	private $id_comision;
	private $carrera;
	private $materia;
	private $anio;
	private $numero;
	
	function __construct(){
		
		$this->cambios = true;
		$this->nuevo = true;
		$this->id_comision = 0;
		$this->carrera = "";
		$this->materia = 0;
		$this->anio = 0;
		$this->numero = 0;
		
	}
	
	//INICIO METODOS ESTATICOS
	
	static function comision($id_comision){
		//METODO ESTATICO QUE DEVUELVE UNA COMISION ESPECIFICA
		
		$c = new Comision();
		
		$sql = 'SELECT * FROM comision WHERE id_comision = :id_comision';
				
				$consulta = $conn->prepare($sql);
				  
				$consulta->bindParam(':id_comision', $this->id_comision, PDO::PARAM_STR);
				
				$consulta->execute();
				
				
		
		return $c;
	}
	
	static function comisiones(){
		//METODO ESTATICO QUE DEVUELVE TODAS LAS COMISIONES DE LA BASE
		
		
	}
	
	//INICIO METODOS DE CLASE
	
	function guardar(){
		//METODO QUE GUARDA UNA NUEVA COMISION O ACTUALIZA UNA EXISTENTE
		
		if(!$this->cambios)
			return;
		
		$this->id_comision = 0;
		$this->carrera = "";
		$this->materia = 0;
		$this->anio = 0;
		$this->numero = 0;
		
		$conn = new Conexion();
		
		if($this->nuevo){
			
			try{
				$sql = 'INSERT INTO comision(id_carrera, materia, anio, f_inicio, f_fin, cuatrimestre, porc_asistencia)
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
				throw new Exception('Error al insertar la nueva comision: '.$e->getMessage());
			}
			
		}
		else{
			
			
			
		}
		
	}
	
	function eliminar(){
		
		
	}
	
	function getAlumnos(){
		
		
		
	}
	
	//INICIO GETTERS Y SETTERS
	//get y set de id_comision
	function getId_comision(){
		return $this->id_comision;
	}
	function setId_comision($id_comision){
		if($id_comision<0){
			return;
		}
		$this->id_comision=$id_comision;
		$this->cambios=true;
	}
	
	//get y set de carrera
	function getCarrera(){	
		return $this->carrera;
	}
	function setCarrera($carrera){
		$carreras = array("SFW", "RED", "ENF");
		if(!in_array($carrera, $carreras))
			return;
		
		$this->carrera=$carrera;
		$this->cambios= true;
	}
	
	//get y set y materia
	function getMateria(){	
		return $this->materia;
	}
	function setMateria($materia){
		if($materia<1)
			return;
		$max = 0;
		if($this->id_carrera=='SFW')
			$max=17;
		if($this->id_carrera=='ENF')
			$max=18;
		if($this->id_carrera=='RED')
			$max=31;
		if($materia>$max)
			return;
		$this->materia=$materia;
		$this->cambios=true;
	}
	
	//get y set de anio
	function getAnio(){	
		return $this->anio;
	}
	function setAnio($anio){
		if($anio>0 && $anio<4)
		$this->anio=$anio;
		$this->cambios=true;
	}
	
	//get y set de numero
	function getNumero(){	
		return $this->numero;
	}
	
	function setNumero($numero){
		if($numero < 1)
			return;
		
		$this->numero=$numero;
		$this->cambios=true;
	}
