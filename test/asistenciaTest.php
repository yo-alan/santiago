<?php
	
	require_once '../modelo/asistencia.class.php';
	require_once '../modelo/clase.class.php';
	require_once '../modelo/conexion.class.php';
	
	class asistenciaTest extends PHPUnit_Framework_TestCase{
		
		/*protected $conexion;
		protected $asist;
		protected $clas;
		
		protected function setUp(){
			
			$this->conexion = new Conexion(); 
			$this->asist = Asistencia::asistencias();
			$this->clas = Clase::clases();
		}*/
		
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
			echo 'no fallo';
			
		}
		
		/*public function testPresente(){
			/*Test que valida que todo alumno ausente tenga un valor de justificado o injustificado.
			 * A su vez evalua que un alumno presente no tenga ningún valor en la columna "justificado"*/
			
			/*$prueba1 = array('1', null);
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
		}*/
		
		public function testClases_con_Asist(){
			
			/*Test que evalúa que ninguna clase se encuentre cargada sin su asistencia*/
			
			$arreglo = array();
			foreach($this->asist as $objeto)
			{
				array_push($arreglo, $objeto->getClase());
			}
			
			foreach($this->clas as $objeto)
			{
				$clase = $objeto->getId_clase();
				$this->assertContains($clase, $arreglo);
				
			}
			
		}
	}

?>
