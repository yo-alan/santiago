<?php
	require_once '../modelo/comision.class.php';
	require_once '../modelo/alumno.class.php';
	
	class comisionTest extends PHPUnit_Framework_TestCase{
        protected $conexion;
        protected $arrayLegajoAlumn;
        protected $comision;
        protected $alumno;
        
		protected function setUp(){
            $this->conexion= new Conexion();
			$this->arrayLegajoAlumn = Alumno::alumnos();
            $this->comision = new Comision();
            $this->alumno = new Alumno();
            
		}
		
		public function testMayorTreinta(){
			$cantMaxAlumn = 30;
            $cantAlumnInsertados=0;
			$nroComision=222;
            $docAlumno=0;
            
            foreach($this->arrayLegajoAlumn as $objeto){
                $alumno->alumno($objeto);
                $docAlumno = $alumno['documento'];
                $comision->guardarAlumnoEnComision($nroComision,$docAlumno);
                $cantAlumnInsertados++;
            }
            
			$this->AssertGreaterThan($cantAlumnInsertados,$cantMaxAlumn);
		}
		
	
	}
