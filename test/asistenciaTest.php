<?php
	
	require_once '../modelo/asistencia.class.php';
	require_once '../modelo/clase.class.php';
	require_once '../modelo/conexion.class.php';
	
		
	class asistenciaTest extends PHPUnit_Framework_TestCase{
		
		
		public function testPresente(){
			
			try{
			$objeto = new Asistencia();
			$objeto->setPresente('1');
			$objeto->setJustificada('1');
			
			$objeto->guardar();
		}catch(Exception $e)
		{
			return;
		}
			echo "fallo el primero \n";
			
		}
		
		public function testClases_con_Asist(){
			try{
				
			$objeto = new Asistencia();
			$objeto->setClase(null);
			$objeto->setAlumno(null);
			$objeto->guardar();
		}catch(Exception $e)
		{
			return;
		}
		
		echo 'fallo el segundo';
			
		}
	}

?>

?>
