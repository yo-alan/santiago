<?php 
 class Conexion extends PDO{ 
   private $tipo_de_base = 'mysql';
   private $host = 'localhost';
   private $nombre_de_base = 'esquema';
   private $usuario = 'root';
   private $contrasena = ''; 
   
   public function __construct($usuar,$pass){
      try{
            $this->usuario = $usuar;
            $this->contrasena = $pass;
            
            parent::__construct($this->tipo_de_base.':host='.$this->host.';dbname='.$this->nombre_de_base, $this->usuario, $this->contrasena);
         
      }catch(PDOException $e){
            echo 'No se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
            exit;
         
      }
   } 
 }
