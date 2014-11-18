<?php
	
	require_once '../modelo/asistencia.class.php';
	require_once '../modelo/conexion.class.php';
	
	class asistenciaTest extends PHPUnit_Framework_TestCase{
		
		protected $conexion;
		protected $asist;
		
		protected function setUp(){
			
			$this->conexion = new Conexion(); 
			$this->asist = Asistencia::asistencias();
		}
		
		public function testPresente(){
			
			$prueba1 = array('1', null);
			foreach($this->asist as $objeto)
			{
				$arreglo[0] = $objeto->getPresente();
				$arreglo[1] = $objeto->getJustificada();
				switch($arreglo[0])
				{
					case '1':
						$this->assertSame($prueba1, $arreglo);
						break;
					case '0':
						$this->assertNotNull($arreglo[1]);
						break;
				}
			}	
		}
	}

?>
