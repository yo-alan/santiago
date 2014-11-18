<?php
	
	require_once '../modelo/comision_alumno.class.php';
	require_once '../modelo/conexion.class.php';
	
	class Comision_alumnoTest extends PHPUnit_Framework_TestCase{
		
		protected $conexion;
		protected $alumnos;
		
		protected function setUp(){
			
			$this->conexion = new Conexion(); 
			$this->alumnos = Comision_alumno::comisiones_alumnos();
		}
		
		public function testDistintaComision(){
			/*Test que evalúa que ningún alumno se encuentre en la misma
			 * comisión*/
			 
			$max = count($this->alumnos);
			for($i = 0; $i < $max; $i++)
			{
				$objeto = $this->alumnos[$i];
				$arreglo[0] = $objeto->getAlumno();
				$arreglo[1] = $objeto->getComision();
				for($j = 0; $j < $max; $j++)
				{
					if($this->alumnos[$i] == $this->alumnos[$j])
					{
						continue;
					}
					$objeto = $this->alumnos[$j];
					$arreglo2[0] = $objeto->getAlumno();
					$arreglo2[1] = $objeto->getComision();
					$this->assertNotSame($arreglo, $arreglo2);
				}
			}
		}
	}

?>
