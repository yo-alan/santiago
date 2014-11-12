<!DOCTYPE html>
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
                <div class="panel-body">
                    <table class="table table-striped tablaData-simple" id="tablaEnComision">
                        <thead>
                            <tr>
                                <th>Legajo</th>
                                <th>DNI</th>
                                <th>Apellido</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($aluEnCom as $al): ?>
                            <tr>
                                <td><?php echo $al->getLegajo()?></td>
                                <td><?php echo $al->getDocumento()?></td>
                                <td><?php echo $al->getApellido().','.$al->getNombre()?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>    
        </div>
        <div class="container col-md-6">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    Alumnos sin Comision
                </div>    
                <div class="panel-body">
                    <table class="table table-striped tablaData-simple" id="tablaSinComision">
                        <thead>
                            <tr>
                                <th>Legajo</th>
                                <th>DNI</th>
                                <th>Apellido</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($aluSinCom as $al): ?>
                            <tr>
                                <td><?php echo $al->getLegajo()?></td>
                                <td><?php echo $al->getDocumento()?></td>
                                <td><?php echo $al->getApellido().','.$al->getNombre()?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>