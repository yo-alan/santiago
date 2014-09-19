<?php
    //CASE QUE EVALUA DONDE REDIRIGIR UN FORMULARIO
    if(isset($_POST['tipoFormulario'])){
        switch($_POST['tipoFormulario']){
            case 'form-alumno': 
                    include 'controlador/alumno.php';
                break;
            case 'form-cursada': 
                    include 'controlador/cursada.php';
                break;
        }
    }

?>
