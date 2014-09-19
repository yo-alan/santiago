<?php
    //CASE QUE EVALUA DONDE REDIRIGIR UN FORMULARIO
    if(isset($_POST['tipoFormulario'])){
        switch($_POST['tipoFormulario']){
            case 'form-alumno': 
                    include 'controlador/form-alumno.php';
                break;
            case 'form-cursada': 
                    include 'controlador/form-cursada.php';
                break;
        }
    }

?>
