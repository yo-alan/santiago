<?php

    /*$cursadas='';
    if(include '../modelo/cursada.class.php'){
        $cursadas=Cursada::cursadas();
    }  

    $comisiones='';
    /*if(include '../modelo/comision.class.php'){
        $comisiones=Comision::comisiones();
    }*/
        
?>
<html>
	<head>
		<link rel="Stylesheet" href="../librerias/css/bootstrap.css">
		<link rel="Stylesheet" href="../librerias/css/default.css">
		<script src="../librerias/js/jquery.js"></script>
		<script src="../librerias/js/bootstrap.js"></script>
		<script src="../librerias/js/twitter-bootstrap-hover-dropdown.min.js"></script>
	</head>
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
                <th>Cod_Mat</th>
                <th>Anio</th>
                <th>Cuatr.</th>
                <th>Agregar Nro de Comision</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($cp as $c):?>
            <tr>
				<form method="POST" action='./../controlador/comision.php'>
                <td><input type = 'text' class = 'form-control' name = 'carrera' value = <?php echo $c->getId_carrera()?>></td>
                <td><input type = 'text' class = 'form-control' name = 'nombre_materia' value =<?php echo $c->getNombre_materia()?>></td>
                <td><input type = 'text' class = 'form-control' name = 'materia' value =<?php echo $c->getMateria()?>></td>
                <td><input type = 'text' class = 'form-control' name = 'anio' value =<?php echo $c->getAnio()?>></td>
                <td><input type = 'text' class = 'form-control' name = 'cuatrimestre' value =<?php echo $c->getCuatrimestre()?>></td>
                <td><input type = 'text' class = 'form-control' name = 'numero'></td>
				<td><button type = 'submit' name = 'action' value = 'agregar' class =  'btn btn-primary col-md col-md-offset-6'>Agregar</button></td>
				</form>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>    
</div>
<!-- Modal Asignar Comision a Cursada 
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
            
				<p id = 'id_carrera'><?php echo $c->getId_carrera()?></p>
				<br>
                <p id = 'nombre_materia'><?php echo $c->getNombre_materia()?></p>
           
           <!-- <select name="idcomision" id="idcomision">
                <?php //foreach($comisiones as $cm):?>
                    <!--<option value="<?php echo $cm->getId_comision()?>">
                            <?php //echo $cm->getCarrera()?>|<?php //echo $cm->getMateria()?>|<?php //echo $cm->getAnio()?>|<?php //echo $cm->getNumero()?>
                    </option>
                <?php //endforeach;?>
            </select>-->
       <!-- </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Aplicar Cambios</button>
      </div>
    </div>
  </div>
</div>-->
</html>
