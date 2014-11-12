<<!DOCTYPE html>
<html lang="es">
    <?php include '../vista/header.php'?>
    <body>
        <?php echo $breadcrumb;?>
        <div class="container col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Detalle de Comision</div>
                <div class="panel-body">
                    <div class="form-group col-md-12">
                        <div class="col-md-4">Carrera:</div>
                        <div><?php echo $com->getCarrera()?></div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="col-md-4">Materia:</div>
                        <div><?php echo $com->getMateria()?></div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="col-md-4">A&ntilde;o:</div>
                        <div><?php echo $com->getAnio()?></div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="col-md-4">Nro Comision:</div>
                        <div><?php echo $com->getNumero()?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container col-md-6">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Alumnos en Comision
                </div>
                <div class="panel-body">pepe</div>
            </div>    
        </div>
        <div class="container col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Alumnos sin Comision
                </div>    
                <div class="panel-body">pompin</div>
            </div>
        </div>
    </body>
</html>