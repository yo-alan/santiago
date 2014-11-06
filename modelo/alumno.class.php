<?php

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
	
	static function alumno($legajo){
		//Metodo estatico que retorna un alumno que posea el $legajo
		
		$a = new Alumno();
		
		$conn = new Conexion();
		
		$sql = 'SELECT nombre, apellido, p.documento, f_nacimiento, legajo, direccion
				FROM persona p, alumno a
				WHERE a.documento = p.documento AND legajo = :legajo';
		
		$consulta = $conn->prepare($sql);
		
		$consulta->setFetchMode(PDO::FETCH_ASSOC);
		
		$consulta->bindParam(':legajo', $legajo, PDO::PARAM_INT);
		
		try{
			
			$consulta->execute();
			
			$results = $consulta->fetch();
			
			$a->nombre = $results['nombre'];
			$a->apellido = $results['apellido'];
			$a->documento = $results['documento'];
			$a->f_nacimiento = $results['f_nacimiento'];
			$a->legajo = $results['legajo'];
			$a->direccion = $results['direccion'];
			$a->nuevo = false;
			$a->cambios = false;
			
		}catch(PDOException $e){
			
		}
		
		return $a;
	}
	
	static function alumnos(){
		//MMETODO ESTATICO QUE RETORNA TODOS LOS ALUMNOS DE LA BASE
		
		$as = array();
		
		$conn = new Conexion();
		
		$sql = 'SELECT legajo FROM alumno';
		
		$consulta = $conn->prepare($sql);
		
		$consulta->setFetchMode(PDO::FETCH_ASSOC);
		
		try{
			
			$consulta->execute();
			
			$results = $consulta->fetchall();
			
			foreach($results as $r){
				
				$a = Alumno::alumno($r['legajo']);
				
				array_push($as, $a);
			}
			
		}catch(PDOException $e){
			
		}
		
		return $as;
	}
	
	static function alumnosXcursada($anio,$carrera){
		//MMETODO ESTATICO QUE RETORNA TODOS LOS ALUMNOS de una cursada
		
		$as = array();
		
		$conn = new Conexion();
		
		$sql = 'SELECT
					alu.documento,per.nombre nombrealumno,per.apellido,com_a.comision,com.carrera,car.nombre nombrecarrera,com.materia,mat.nombre nombremateria,com.anio,cur.cuatrimestre
				FROM persona per
				JOIN alumno alu ON per.documento = alu.documento
				JOIN comision_alumno com_a ON alu.documento = com_a.alumno
				JOIN comision com ON com_a.comision = com.id_comision
				JOIN cursada cur ON com.carrera = cur.id_carrera AND com.materia = cur.materia AND com.anio = cur.anio
				JOIN materia mat ON cur.materia = mat.codigo_materia
				JOIN carrera car ON mat.id_carrera = car.id_carrera
				WHERE cur.id_carrera = :nroCarrera AND cur.anio = :anioCursada
				';
		
		$consulta = $conn->prepare($sql);
		
		$consulta->setFetchMode(PDO::FETCH_ASSOC);
		
		$consulta->bindParam(':nroCarrera', $carrera, PDO::PARAM_INT);
		
		$consulta->bindParam(':anioCursada', $anio, PDO::PARAM_INT);
		
		try{
			
			$consulta->execute();
			
			$results = $consulta->fetchall();
			
			/*
			foreach($results as $r)
			{
				
				$a = Alumno::alumno($r['legajo']);
				
				array_push($as, $a);
			}
			*/
			
		}catch(PDOException $e){
			
		}
		
		/*return $as;*/
		
		return $results;
		
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
		
		if($this->direccion == "")
			throw new Exception("La dirección no es válida.");
		
		if($this->legajo == "")
			throw new Exception("El número de legajo no es válido.");
		
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
		
		if(!$this->nuevo)
			return;
		
		if($this->documento == 0)
			return;
		
		try{
			$sql = "DELETE FROM alumno WHERE documento = :documento";
			
			$stmt = $conn->prepare($sql);
			
			$stmt->bindParam(':documento', $this->documento, PDO::PARAM_INT);
			
			$stmt->execute();
			
			$sql = "DELETE FROM persona WHERE documento = :documento";
			
			$stmt = $conn->prepare($sql);
			
			$stmt->bindParam(':documento', $this->documento, PDO::PARAM_INT);
			
			$stmt->execute();
			
		} catch(PDOException $e){
			throw new Exception("No pude eliminarme de la base: ". $e->getMessage());
		}
		
	}
	
	//INICIO METODOS GETTERS Y SETTERS
	
	function getNombre(){
		return $this->nombre;
	}
	
	function setNombre($nombre){
		
		if(strlen($nombre) < 3)
			return;
		
		$this->nombre = $nombre;
		$this->cambios = true;
	}
	
	function getApellido(){
		return $this->apellido;
	}
	
	function setApellido($apellido){
		
		if(strlen($apellido) < 3)
			return;
		
		$this->apellido = $apellido;
		$this->cambios = true;
	}
	
	function getDocumento(){
		return $this->documento;
	}
	
	function setDocumento($documento){
		
		if($documento < 1000000 && $documento > 99999999)
			return;
		
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
