<?php
/*
CLASE PARA LA CONEXION Y LA GESTION DE LA BASE DE DATOS Y LA PAGINA WEB
*/
class database {

 private $conexion;
  
    /* METODO PARA CONECTAR CON LA BASE DE DATOS*/
	public function conectar()
	{
		if(!isset($this->conexion))
		{
		  $this->conexion = (mysql_connect("localhost","root","root")) or die(mysql_error());
		  mysql_select_db("db_univ",$this->conexion) or die(mysql_error());		  
		}
	}	

	 /* METODO PARA REALIZAR UNA CONSULTA 
		INPUT:
		$sql | codigo sql para ejecutar  la consulta
		OUTPUT: $result
	*/
	public function consulta($sql)
	{
		  $resultado = mysql_query($sql,$this->conexion);
		  if(!$resultado){
			  echo 'MySQL Error: ' . mysql_error();
			  exit;
		  }
  		return $resultado; 
	}
	
	/*METODO PARA CONTAR EL NUMERO DE RESULTADOS
		INPUT: $result
		OUTPUT:  cantidad de registros encontrados
	*/
	function numero_de_filas($result){
		if(!is_resource($result)) return false;
		return mysql_num_rows($result);
	}
	
	/*METODO PARA CREAR ARRAY DESDE UNA CONSULTA
		INPUT: $result
		OUTPUT: array con los resultados de una consulta
	*/
	function fetch_assoc($result){
		if(!is_resource($result)) return false;
			return mysql_fetch_assoc($result);
	}
	
     /* METODO PARA CERRAR LA CONEXION A LA BASE DE DATOS */	
	public function disconnect()
	{
		mysql_close();
	}
	
}
?>