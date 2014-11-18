<?php
require_once "conexion.class.php";

class comision_alumno {
	private $cambios;
	private $nuevo;
	private $id;
	private $comision;
	private $alumno;
	
	function __construct (){
		$this->cambios = true;
		$this->nuevo = true;
		$this->id = 0;
		$this->comision;
		$this->alumno;
	}
	//GETTER y SETTER
	
	function getId(){
		return $this->id;
		}
	function getComision(){
		return $this->comision;
		}
	function getAlumno(){
		return $this->alumno;
		}
	
	function setComision($comision){
		$this->comision = $comision;
		$this->cambios = true;
		}
		
		
	static function comision_alumno($id_comision_alumno){
		//METODO ESTATICO QUE DEVUELVE UNA CLASE ESPECIFICA
		
		$c = new Comision_alumno();
		
		$conn = new Conexion();
		
		$sql = 'SELECT * FROM comision_alumno WHERE id = :id_comision_alumno';
		
		$consulta = $conn->prepare($sql);
		
		$consulta->setFetchMode(PDO::FETCH_ASSOC);
		
		$consulta->bindParam(':id_comision_alumno', $id_comision_alumno, PDO::PARAM_INT);
		
		try{
			
			$consulta->execute();
			
			$results = $consulta->fetch();
			
			$c->nuevo = false;
			$c->cambios = false;
			$c->id = $results['id'];
			$c->comision = $results['comision'];
			$c->alumno = $results['alumno'];
			
			
		}catch(PDOException $e){
			
		}
		
		return $c;
	}
	
	static function comisiones_alumnos(){
		//METODO ESTATICO QUE DEVUELVE TODAS LAS CLASES DE LA BASE
		
		$cs = array();
		
		$conn = new Conexion();
		
		$sql = 'SELECT id FROM comision_alumno';
		
		$consulta = $conn->prepare($sql);
		
		$consulta->setFetchMode(PDO::FETCH_ASSOC);
		
		try{
			
			$consulta->execute();
			
			$results = $consulta->fetchall();
			
			foreach($results as $r){
				
				$c = Comision_alumno::comision_alumno($r['id']);
				
				array_push($cs, $c);
			}
			
		}catch(PDOException $e){
			
		}
		
		return $cs;
	}
}

?>
