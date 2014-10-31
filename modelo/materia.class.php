<?php



class Materia {
	
	private $cambios;
	private $nuevo;
	private $id_carrera;
	private $codigo_materia;
	private $nombre;
	private $anio;
	private $cuatrimestre;
	
	function __construct(){
		
		$this->cambios = true;
		$this->nuevo = true;
		$this->id_carrera = "";
		$this->codigo_materia = 0;
		$this->nombre = "";
		$this->anio = 0;
		$this->cuatrimestre = 0;
		
	}
	
	//INICIO METODOS ESTATICOS
	
	static function materia($id_carrera="", $codigo_materia=0){
		//METODO ESTATICO QUE DEVUELVE UNA MATERIA ESPECIFICA
		
		$c = new Materia();
		
		if($id_carrera == "" || $codigo_materia == 0)
			return $c;
		
		
		
	}
	
	static function materias(){
		//METODO ESTATICO QUE DEVUELVE TODAS LAS MATERIAS DE LA BASE
		
		
	}
	
	//INICIO METODOS DE CLASE
	
	function guardar(){
		//METODO QUE GUARDA UNA NUEVA MATERIA O ACTUALIZA UNA EXISTENTE
		
		if(!$this->cambios)
			return;
		
		$conn = new Conexion();
		
		if($this->nuevo){
			
			try{
				$sql = "INSERT INTO materia(id_carrera, codigo_materia, nombre, anio, cuatrimestre)
						VALUES(:id_carrera, :codigo_materia, :nombre, :anio, :cuatrimestre)";
				
				$stmt = $conn->prepare($sql);
				
				$stmt->bindParam(':id_carrera', $this->id_carrera, PDO::PARAM_STR);
				$stmt->bindParam(':codigo_materia', $this->nombre, PDO::PARAM_INT);
				$stmt->bindParam(':nombre', $this->nombre, PDO::PARAM_STR);
				$stmt->bindParam(':anio', $this->nombre, PDO::PARAM_INT);
				$stmt->bindParam(':cuatrimestre', $this->nombre, PDO::PARAM_INT);
				
				$stmt->execute();
				
			} catch(PDOException $e){
				echo "ERROR: ", $e->getMessage();
				die();
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
	
	function getCodig_materia(){
		return $this->codigo_materia;
	}
	
	function setCodigo_materia($codigo_materia){
		$this->codigo_materia = $codigo_materia;
	}
	
	function getNombre(){
		return $this->nombre;
	}
	
	function setNombre($nombre){
		$this->nombre = $nombre;
	}
	
	function getAnio(){
		return $this->anio;
	}
	
	function setAnio($anio){
		$this->anio = $anio;
	}
	
	function getCuatrimestre(){
		return $this->cuatrimestre;
	}
	
	function setCuatrimestre($cuatrimestre){
		$this->cuatrimestre = $cuatrimestre;
	}
	
}
