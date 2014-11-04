<html>
	<head>
		<title>Bedelía | Listado de cursadas</title>
		<link rel="Stylesheet" href="../librerias/css/bootstrap.css">
		<link rel="Stylesheet" href="../librerias/css/default.css">
        <link rel="stylesheet" href="../librerias/css/jquery.dataTables.css">
        <link rel="stylesheet" href="../librerias/css/jquery.dataTables_themeroller.css">
		<script src="../librerias/js/jquery.js"></script>
		<script src="../librerias/js/bootstrap.js"></script>
		<script src="../librerias/js/twitter-bootstrap-hover-dropdown.min.js"></script>
        <script src="../librerias/js/jquery.dataTables.min.js"></script>
        <script src="../librerias/js/listadosTabla.js"></script>
	</head>
<ol class = 'breadcrumb'>
    <li><a href = '../index.php'>Inicio</a></li>
    <li class = 'active'>Listado de Cursadas</li>	
</ol>
<div class="jumbotron">
    <table class="table table-striped tablaData">
        <thead>
            <tr>
                <th>Cod.Carrera</th>
                <th>Materia</th>
                <th>Inicio Cursada</th>
                <th>Fin Cursada</th>
                <th>Cuatr.</th>
                <th>Asignar Comision</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($cp as $c):?>
            <tr>
                <td><?php echo $c->getId_carrera()?></td>
                <td><?php echo $c->getNombre_materia()?></td>
                <td><?php echo $c->getF_inicio()?></td>
                <td><?php echo $c->getF_fin()?></td>
                <td><?php echo $c->getCuatrimestre()?></td>
                <td>
					<i class="btn glyphicon glyphicon-share" data-toggle="modal" data-target="#asignarComision"></i>
                </td>
            </tr>
            <?php endforeach;?>
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
                <?php foreach($c1 as $cm):?>
                    <option value="<?php echo $cm->getId_comision()?>">
                            <?php echo $cm->getCarrera()?>|<?php echo $cm->getMateria()?>|<?php echo $cm->getAnio()?>|<?php echo $cm->getNumero()?>
                    </option>
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
