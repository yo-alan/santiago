<?php

include "conexion.class.php";

class Clase {
	
	private $cambios;
	private $nuevo;
	private $id_clase;
	private $obligatorio;
	private $hora_inicio;
	private $hora_fin;
	private $aula;
	private $dictada;
	private $recuperatoria_de;
	private $comision;
	private $profesor;
	private $hora_ingreso_profesor;
	private $hora_salida_profesor;
	
	function __construct(){
		
		$this->cambios = true;
		$this->nuevo = true;
		$this->obligatorio;
		$this->hora_inicio;
		$this->hora_fin;
		$this->aula;
		$this->dictada;
		$this->recuperatoria_de;
		$this->comision;
		$this->profesor;
		$this->hora_ingreso_profesor;
		$this->hora_salida_profesor;
		
	}
	
	//INICIO METODOS ESTATICOS
	
	static function clase($id_clase){
		//METODO ESTATICO QUE DEVUELVE UNA CLASE ESPECIFICA
		
		$c = new Clase();
		
		$conn = new Conexion();
		
		$sql = 'SELECT * FROM clase WHERE id_clase = :id_clase';
		
		$consulta = $conn->prepare($sql);
		
		$consulta->setFetchMode(PDO::FETCH_ASSOC);
		
		$consulta->bindParam(':id_clase', $id_clase, PDO::PARAM_INT);
		
		try{
			
			$consulta->execute();
			
			$results = $consulta->fetch();
			
			$c->nuevo = false;
			$c->cambios = false;
			$c->id_clase = $results['id_clase'];
			$c->obligatorio = $results['obligatorio'];
			$c->hora_inicio = $results['hora_inicio'];
			$c->hora_fin = $results['hora_fin'];
			$c->aula = $results['aula'];
			$c->dictada = $results['dictada'];
			$c->recuperatoria_de = $results['recuperatoria_de'];
			$c->comision = $results['comision'];
			$c->profesor = $results['profesor'];
			$c->hora_ingreso_profesor = $results['hora_ingreso_profesor'];
			$c->hora_salida_profesor = $results['hora_salida_profesor'];
			
		}catch(PDOException $e){
			
		}
		
		return $c;
	}
	
	static function clases(){
		//METODO ESTATICO QUE DEVUELVE TODAS LAS CLASES DE LA BASE
		
		
	}
	
	//INICIO METODOS DE CLASE
	
	function guardar(){
		//METODO QUE GUARDA UNA NUEVA CLASE O ACTUALIZA UNA EXISTENTE
		
		if(!$this->cambios)
			return;
		
		if($this->hora_inicio == "")
			throw new Exception("La hora de inicio no es válida.");
		
		if($this->hora_fin == "")
			throw new Exception("La hora de finalización no es válida.");
		
		if($this->aula == "")
			throw new Exception("El aula no es válida.");
		
		$conn = new Conexion();
		
		if($this->nuevo){
			
			try{
				$sql = 'INSERT INTO clase(obligatorio, hora_inicio, hora_fin, aula, dictada, recuperatoria_de, comision, profesor, hora_ingreso_profesor, hora_salida_profesor)
						VALUES(:obligatorio, :hora_inicio, :hora_fin, :aula, :dictada, :recuperatoria_de, :comision, :profesor, :hora_ingreso_profesor, :hora_salida_profesor)';
				
				$consulta = $conn->prepare($sql);
				
				$consulta->bindParam(':obligatorio', $this->obligatorio, PDO::PARAM_INT);
				$consulta->bindParam(':hora_inicio', $this->hora_inicio, PDO::PARAM_STR);
				$consulta->bindParam(':hora_fin', $this->hora_fin, PDO::PARAM_STR);
				$consulta->bindParam(':aula', $this->aula, PDO::PARAM_STR);
				$consulta->bindParam(':dictada', $this->dictada, PDO::PARAM_INT);
				$consulta->bindParam(':recuperatoria_de', $this->recuperatoria_de, PDO::PARAM_INT);
				$consulta->bindParam(':comision', $this->comision, PDO::PARAM_INT);
				$consulta->bindParam(':profesor', $this->profesor, PDO::PARAM_INT);
				$consulta->bindParam(':hora_ingreso_profesor', $this->hora_ingreso_profesor, PDO::PARAM_STR);
				$consulta->bindParam(':hora_salida_profesor', $this->hora_salida_profesor, PDO::PARAM_STR);
				
				$consulta->execute();
				
			}catch(PDOException $e){
				throw new Exception('Error al insertar la nueva clase: '.$e->getMessage());
			}
		}
		else{
			
			
			
		}
		
	}
	
	function eliminar(){
		
		if($this->nuevo)
			return;
		
		$sql = "DELETE FROM clase WHERE id_clase = :id_clase";
		
		$consulta = $conn->prepare($sql);
		
		$consulta->bindParam(':id_clase', $this->id_clase, PDO::PARAM_INT);
		
		try{
			
			$consulta->execute();
			
		}catch(PDOException $e){
			throw new Exception('Error al eliminar la clase: '.$e->getMessage());
		}
		
	}
	
	function getObligatorio(){
		return $this->obligatorio;
	}
	
	function setObligatorio($obligatorio){
		
		//VALIDACIONES
		
		$this->obligatorio = $obligatorio;
		$this->cambios = true;
	}
	
	function getHora_inicio(){
		return $this->hora_inicio;
	}
	
	function setHora_inicio($hora_inicio){
		
		//VALIDACIONES
		
		$this->hora_inicio = $hora_inicio;
		$this->cambios = true;
	}
	
	function getHora_fin(){
		return $this->hora_fin;
	}
	
	function setHora_fin($hora_fin){
		
		//VALIDACIONES
		
		$this->hora_fin = $hora_fin;
		$this->cambios = true;
	}
	
	function getAula(){
		return $this->aula;
	}
	
	function setAula($aula){
		
		//VALIDACIONES
		
		$this->aula = $aula;
		$this->cambios = true;
	}
	
	function getDictada(){
		return $this->dictada;
	}
	
	function setDictada($dictada){
		
		//VALIDACIONES
		
		$this->dictada = $dictada;
		$this->cambios = true;
	}
	
	function getRecuperatoria_de(){
		return $this->recuperatoria_de;
	}
	
	function setRecuperatoria_de($recuperatoria_de){
		
		//VALIDACIONES
		
		$this->recuperatoria_de = $recuperatoria_de;
		$this->cambios = true;
	}
	
	function getComision(){
		return $this->comision;
	}
	
	function setComision($comision){
		
		//VALIDACIONES
		
		$this->comision = $comision;
		$this->cambios = true;
	}
	
	function getProfesor(){
		return $this->profesor;
	}
	
	function setProfesor($profesor){
		
		//VALIDACIONES
		
		$this->profesor = $profesor;
		$this->cambios = true;
	}
	
	function getHora_ingreso_profesor(){
		return $this->hora_ingreso_profesor;
	}
	
	function setHora_ingreso_profesor($hora_ingreso_profesor){
		
		//VALIDACIONES
		
		$this->hora_ingreso_profesor = $hora_ingreso_profesor;
		$this->cambios = true;
	}
	
	function getHora_salida_profesor(){
		return $this->hora_salida_profesor;
	}
	
	function setHora_salida_profesor($hora_salida_profesor){
		
		//VALIDACIONES
		
		$this->hora_salida_profesor = $hora_salida_profesor;
		$this->cambios = true;
	}
	
}
