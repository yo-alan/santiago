<?php
/*
 CLASE PARA LA GESTION DE LOS UNIVERSITARIOS
*/
require_once "db.class.php";

class universitario extends database {

	/* REALIZA UNA CONSULTA A LA BASE DE DATOS EN BUSCA DE  REGISTROS UNIVERSITARIOS DADOS COMO
	     PARAMETROS LA "CARRERA" Y LA "CANTIDAD" DE REGISTROS A MOSTRAR
		 INPUT:
		 $carrera | nombre de la carrera a buscar
		 $limit | cantidad de registros a mostrar
		 OUTPUT:
		 $data | Array con los registros obtenidos, si no existen datos, su valor es una cadena vacia
	 */
	function universitarios($carrera=NULL, $limit=12)
	{
		//conexion a la base de datos
		$this->conectar();		
		$query = $this->consulta("SELECT * FROM universitario WHERE carrera='$carrera' ORDER BY rand() LIMIT  $limit;");
 	    $this->disconnect();					
		if($this->numero_de_filas($query) > 0) // existe -> datos correctos
		{		
				//se llenan los datos en un array
				while ( $tsArray = $this->fetch_assoc($query) ) 
					$data[] = $tsArray;			
		
				return $data;
		}else
		{	
			return '';
		}			
	}
	
}

?>