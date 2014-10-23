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
	
	static function clase($id_comision){
		//METODO ESTATICO QUE DEVUELVE UNA CLASE ESPECIFICA
		
		$c = new Clase();
		
		$conn = new Conexion();
		
		$sql = 'SELECT * FROM clase WHERE id_comision = :id_comision';
		
		$consulta = $conn->prepare($sql);
		
		$consulta->setFetchMode(PDO::FETCH_ASSOC);
		
		$consulta->bindParam(':id_comision', $id_comision, PDO::PARAM_INT);
		
		try{
			
			$consulta->execute();
			
			$results = $consulta->fetch();
			
			$c->nuevo = false;
			$c->cambios = false;
			$c->id_comision = $results['id_comision'];
			
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
		
		if($this->carrera == "")
			throw new Exception("La carrera no es válida.");
		
		$conn = new Conexion();
		
		if($this->nuevo){
			
			try{
				$sql = 'INSERT INTO clase(carrera, materia, anio, numero)
						VALUES(:carrera, :materia, :anio, :numero)';
				
				$consulta = $conn->prepare($sql);
				  
				$consulta->bindParam(':carrera', $this->carrera, PDO::PARAM_STR);
				$consulta->bindParam(':materia', $this->materia, PDO::PARAM_INT);
				$consulta->bindParam(':anio', $this->anio, PDO::PARAM_INT);
				$consulta->bindParam(':numero', $this->numero, PDO::PARAM_INT);
				
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
		
		$sql = "DELETE FROM clase WHERE id_comision = :id_comision";
		
		$consulta = $conn->prepare($sql);
		
		$consulta->bindParam(':id_comision', $this->id_comision, PDO::PARAM_INT);
		
		try{
			
			$consulta->execute();
			
		}catch(PDOException $e){
			throw new Exception('Error al eliminar la comision: '.$e->getMessage());
		}
		
	}
	
