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
                        <div><?php echo $com->getNombre_Materia()?></div>
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
        
        <div class="container <?php echo $clase ?>">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <?php echo $tituloTabla?>
                </div>
                <div class="panel-body">
                    <table class="table table-striped tablaData-simple" id="tablaEnComision">
                        <thead>
                            <tr>
                                <th>Legajo</th>
                                <th>DNI</th>
                                <th>Apellido</th>
                                <th>Quitar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($aluEnCom as $al): ?>
                            <tr>
                                <td><?php echo $al->getLegajo()?></td>
                                <td class="dni"><?php echo $al->getDocumento()?></td>
                                <td class="nombre"><?php echo $al->getApellido().','.$al->getNombre()?></td>
                                <td><a class="quitarAlumno glyphicon glyphicon-chevron-right" data-toggle="modal" data-target="#modalQuitarAlumno"></a></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>    
        </div>
        <!-- Modal Quitar Alumno a Comision-->
        <div class="modal fade" id="modalQuitarAlumno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Quitar alumno de la comisi&oacute;n</h4>
              </div>
              <div class="modal-body">
                  <div class="mensaje"></div>
                  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                      <input type="hidden" name="action" value="quitarAlumno">
                      <input type="hidden" name="rmAlumno" class="rmAlumno">
                      <input type="hidden" name="rmComision" value="<?php echo $_GET['comision']?>">
                  </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-danger" id="siEliminar">Si,Eliminar</button>
              </div>
            </div>
          </div>
        </div>
        
        <?php if($mostrarTabla){ ?>
        <!--TABLA DE ALUMNOS SIN COMISION-->
        <div class="container col-md-6">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    Alumnos sin Comision
                </div>    
                <div class="panel-body">
                    <table class="table table-striped tablaData-simple" id="tablaSinComision">
                        <thead>
                            <tr>
                                <th>Agregar</th>
                                <th>Legajo</th>
                                <th>DNI</th>
                                <th>Apellido</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($aluSinCom as $al): ?>
                            <tr>
                                <td><a class="agregarAlumno glyphicon glyphicon-chevron-left" data-toggle="modal" data-target="#modalAgregarAlumno"></a></td>
                                <td><?php echo $al->getLegajo()?></td>
                                <td class="dni"><?php echo $al->getDocumento()?></td>
                                <td class="nombre"><?php echo $al->getApellido().','.$al->getNombre()?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Modal Agregar Alumno a Comision-->
        <div class="modal fade" id="modalAgregarAlumno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Agregar alumno a comisi&oacute;n</h4>
              </div>
              <div class="modal-body">
                  <div class="mensaje"></div>
                  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                      <input type="hidden" name="action" value="agregarAlumno">
                      <input type="hidden" name="addAlumno" class="addAlumno">
                      <input type="hidden" name="addComision" value="<?php echo $_GET['comision']?>">
                  </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-primary" id="siAgregar">Si, Agregar</button>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
    </body>
</html>