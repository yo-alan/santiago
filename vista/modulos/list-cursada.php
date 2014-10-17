<?php
    include '../../modelo/cursada.class.php';
    //$cursadas=Cursada::cursadas();
    $cursadas='';

    include '../../modelo/comision.class.php';
    //$comisiones=Comision::comisiones();
    $comisiones='';
?>
<ol class = 'breadcrumb'>
    <li><a href = '../index.php'>Inicio</a></li>
    <li class = 'active'>Listado de Cursadas</li>	
</ol>
<div class="jumbotron">
    <table class="table">
        <thead>
            <tr>
                <th>Cod.Carrera</th>
                <th>Materia</th>
                <th>f_inicio</th>
                <th>f_fin</th>
                <th>Cuatr.</th>
                <th>Asignar Comision</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($cursadas as $c):?>
            <tr>
                <td><?php echo $c['id_carrera']?></td>
                <td><?php echo $c['materia']?></td>
                <td><?php echo $c['f_inicio']?></td>
                <td><?php echo $c['f_fin']?></td>
                <td><?php echo $c['cuatrimestre']?></td>
                <td><i>+</i></td>
            </tr>
            <?php endforeach;?>
            <!--REGISTRO DE PRUEBA-->
            <tr>
                <td>00</td>
                <td>INGENIERIA DE SOFT</td>
                <td>01-08-2014</td>
                <td>30-11-2014</td>
                <td>2°</td>
                <td>
                    <i class="btn glyphicon glyphicon-share" data-toggle="modal" data-target="#asignarComision"></i>
                </td>
            </tr>
            <!--FIN REGISTRO DE PRUEBA-->
        </tbody>
    </table>    
</div>
<!-- Modal Asignar Comision a Cursada -->
<div class="modal fade" id="asignarComision" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Asignar Comision</h4>
      </div>
      <div class="modal-body">
        <form method="post" action = '../../controlador/cursada.php'>
            <input type="hidden" name="idcursada" id="idcursada">
            <label for="idcomision">Elija una Comision:</label>
            <select name="idcomision" id="idcomision">
                <?php foreach($comisiones as $cm):?>
                        <option value="<?php echo $cm['idcomision']?>"><?php echo $cm['carrera']?>|<?php echo $cm['materia']?>|<?php echo $cm['anio']?>|<?php echo $cm['numero']?></option>
                <?php endforeach;?>
            </select>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Aplicar Cambios</button>
      </div>
    </div>
  </div>
</div>