<?php

//include "conexion.class.php";
include "alumno.class.php";

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
		
		$conn = new Conexion();
		
		$sql = 'SELECT * FROM comision WHERE id_comision = :id_comision';
		
		$consulta = $conn->prepare($sql);
		
		$consulta->setFetchMode(PDO::FETCH_ASSOC);
		
		$consulta->bindParam(':id_comision', $id_comision, PDO::PARAM_INT);
		
		try{
			
			$consulta->execute();
			
			$results = $consulta->fetch();
			
			$c->nuevo = false;
			$c->cambios = false;
			$c->id_comision = $results['id_comision'];
			$c->carrera = $results['carrera'];
			$c->materia = $results['materia'];
			$c->anio = $results['anio'];
			$c->numero = $results['numero'];
			
		}catch(PDOException $e){
			
		}
		
		return $c;
	}
	
	static function comisiones(){
		//METODO ESTATICO QUE DEVUELVE TODAS LAS COMISIONES DE LA BASE
		
		$cs = array();
		
		$conn = new Conexion();
		
		$sql = 'SELECT id_comision FROM comision';
		
		$consulta = $conn->prepare($sql);
		
		$consulta->setFetchMode(PDO::FETCH_ASSOC);
		
		try{
			
			$consulta->execute();
			
			$results = $consulta->fetchall();
			
			foreach($results as $r){
				
				$c = Cursada::cursada($r['id_comision']);
				
				array_push($cs, $c);
			}
			
		}catch(PDOException $e){
			
		}
		
		return $cs;
	}
	
	//INICIO METODOS DE CLASE
	
	function guardar(){
		//METODO QUE GUARDA UNA NUEVA COMISION O ACTUALIZA UNA EXISTENTE
		
		if(!$this->cambios)
			return;
		
		if($this->carrera == "")
			throw new Exception("La carrera no es válida.");
		if($this->materia == 0)
			throw new Exception("La materia no es válida.");
		if($this->anio == 0)
			throw new Exception("El año no es válida.");
		if($this->numero == 0)
			throw new Exception("El numero no es válida.");
		
		$conn = new Conexion();
		
		if($this->nuevo){
			
			try{
				$sql = 'INSERT INTO comision(carrera, materia, anio, numero)
						VALUES(:carrera, :materia, :anio, :numero)';
				
				$consulta = $conn->prepare($sql);
				  
				$consulta->bindParam(':carrera', $this->carrera, PDO::PARAM_STR);
				$consulta->bindParam(':materia', $this->materia, PDO::PARAM_INT);
				$consulta->bindParam(':anio', $this->anio, PDO::PARAM_INT);
				$consulta->bindParam(':numero', $this->numero, PDO::PARAM_INT);
				
				$consulta->execute();
				
			}catch(PDOException $e){
				throw new Exception('Error al insertar la nueva comision: '.$e->getMessage());
			}
			
		}
		else{
			
			
			
		}
		
	}
	
	function eliminar(){
		
		if($this->nuevo)
			return;
		
		$sql = "DELETE FROM comision WHERE id_comision = :id_comision";
		
		$consulta = $conn->prepare($sql);
		
		$consulta->bindParam(':id_comision', $this->id_comision, PDO::PARAM_INT);
		
		try{
			
			$consulta->execute();
			
		}catch(PDOException $e){
			throw new Exception('Error al eliminar la comision: '.$e->getMessage());
		}
		
	}
	
	function getAlumnos(){
		
		$as = array();
		
		$sql = "SELECT alumno FROM comision_alumno WHERE comision = :comision";
		
		$consulta = $conn->prepare($sql);
		
		$consulta->setFetchMode(PDO::FETCH_ASSOC);
		
		$consulta->bindParam(':comision', $this->id_comision, PDO::PARAM_INT);
		
		try{
			
			$consulta->execute();
			
			$results = $consulta->fetchAll();
			
			foreach($results as $r){
				$a = Alumno::alumno($r['alumno']);
				
				array_push($as, $a);
			}
			
		}catch(PDOException $e){
			throw new Exception('Error al eliminar la comision: '.$e->getMessage());
		}
		
		return $as;
	}
	
	//INICIO GETTERS Y SETTERS
	//get y set de id_comision
	function getId_comision(){
		return $this->id_comision;
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
		if($this->carrera == 'SFW')
			$max=17;
		else if($this->carrera == 'ENF')
			$max=18;
		else if($this->carrera == 'RED')
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
		
		if($anio < 1 || $anio > 3)
			return;
		
		$this->anio = $anio;
		$this->cambios = true;
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
}
