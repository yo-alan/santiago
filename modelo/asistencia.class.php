<?php

include_once "conexion.class.php";

class Asistencia{
	
	private $nuevo;
	private $cambios;
	private $id_asistencia;
	private $comision;
	private $alumno;
	private $clase;
	private $presente;
	private $justificada;
	
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
	
	static function asistencia($id){
		//Metodo estatico que retorna un asistencia que posea el $legajo
		
		$a = new Asistencia();
		
		$conn = new Conexion();
		
		$sql = 'SELECT * FROM asistencia WHERE id_asistencia = :id';
		
		$consulta = $conn->prepare($sql);
		
		$consulta->setFetchMode(PDO::FETCH_ASSOC);
		
		$consulta->bindParam(':id', $id, PDO::PARAM_INT);
		
		try{
			
			$consulta->execute();
			
			$results = $consulta->fetch();
			
			$a->comision = $results['comision'];
			$a->alumno = $results['alumno'];
			$a->clase = $results['clase'];
			$a->presente = $results['presente'];
			$a->justificada = $results['justificada'];
			$a->id = $results['id_asistencia'];
			$a->nuevo = false;
			$a->cambios = false;
			
		}catch(PDOException $e){
			throw new Exception("Ocurrio un error: ". $e->getMessage());
		}
		
		return $a;
	}
	
	static function asistencias(){
		//MMETODO ESTATICO QUE RETORNA TODOS LOS asistenciaS DE LA BASE
		
		$as = array();
		
		$conn = new Conexion();
		
		$sql = 'SELECT id_asistencia FROM asistencia';
		
		$consulta = $conn->prepare($sql);
		
		$consulta->setFetchMode(PDO::FETCH_ASSOC);
		
		try{
			
			$consulta->execute();
			
			$results = $consulta->fetchall();
			
			foreach($results as $r){
				
				$a = Asistencia::asistencia($r['id_asistencia']);
				
				array_push($as, $a);
			}
			
		}catch(PDOException $e){
			throw new Exception("Ocurrio un error: ". $e->getMessage());
		}
		
		return $as;
	}
	
	//INICIO METODOS DE CLASE
	
	function guardar(){
		//Metodo de clase que guarda un asistencia en la base
		
		if(!$this->cambios)//Si no hay cambios en el objeto
			return;
		
		$conn = new Conexion();
		
		if($this->nuevo){//Si el objeto es nuevo se hace un INSERT
			
			try{
				$sql = "INSERT INTO asistencia(comision, alumno, clase, presente, justificada)
						VALUES(:comision, :alumno, :clase, :presente, :justificada)";
				
				$stmt = $conn->prepare($sql);
				
				$stmt->bindParam(':comision', $this->comision, PDO::PARAM_INT);
				$stmt->bindParam(':alumno', $this->alumno, PDO::PARAM_INT);
				$stmt->bindParam(':clase', $this->clase, PDO::PARAM_INT);
				$stmt->bindParam(':presente', $this->presente, PDO::PARAM_INT);
				$stmt->bindParam(':justificada', $this->justificada, PDO::PARAM_INT);
				
				$stmt->execute();
				
			} catch(PDOException $e){
				throw new Exception("No me pude guardar: ". $e->getMessage());
			}
			
		}
		else{//Si el objeto no es nuevo se hace un UPDATE
			
			
			
			
		}
		
	}
	
	function eliminar(){
		//Metodo de clase que elimina un asistencia de la base
		
		if(!$this->nuevo)
			return;
		
		if($this->id_asistencia == 0)
			return;
		
		try{
			$sql = "DELETE FROM asistencia WHERE id_asistencia = :id_asistencia";
			
			$stmt = $conn->prepare($sql);
			
			$stmt->bindParam(':id_asistencia', $this->id_asistencia, PDO::PARAM_INT);
			
			$stmt->execute();
			
		} catch(PDOException $e){
			throw new Exception("No pude eliminarme: ". $e->getMessage());
		}
		
	}
	
	//INICIO METODOS GETTERS Y SETTERS
	
	function getId_asistencia(){
		return $this->id_asistencia;
	}
	
	function getComision(){
		return $this->comision;
	}
	
	function setComision($comision){
		
		$this->comision = $comision;
		$this->cambios = true;
	}
	
	function getAlumno(){
		return $this->alumno;
	}
	
	function setAlumno($alumno){
		
		$this->alumno = $alumno;
		$this->cambios = true;
	}
	
	function getClase(){
		return $this->clase;
	}
	
	function setClase($clase){
		
		$this->clase = $clase;
		$this->cambios = true;
	}
	
	function getPresente(){
		return $this->presente;
	}
	
	function setPresente($presente){
		
		$this->justificada = NULL;
		$this->presente = $presente;
		$this->cambios = true;
	}
	
	function getJustificada(){
		return $this->justificada;
	}
	
	function setJustificada($justificada){
		
		if($this->presente == 1)
			return;
		
		if($justificada == "true")
			$justificada = 1;
		else if($justificada == "false")
			$justificada = 0;
		
		$this->justificada = $justificada;
		$this->cambios = true;
	}
	
}
