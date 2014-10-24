<!--

  Crear la vista para que muestre un listado y agregar el alumno

  Como jefe del Dpto Alumnos necesito poder emitir un listado 
  alfabético de alumnos por cursada o por comisión.

- Necesito poder sacar el listado en formato PDF.
- Necesito que se muestre el total de almnos incluidos en el listado.
- En el listado por cursada, si hay más de una comision indicar 
  para cada alumno la comision en la que esta inscripto.

-->

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Listado de alumnos</title>
 
    <link href="../../librerias/css/bootstrap.min.css" rel="stylesheet" media="screen">
     <link href="../../librerias/datepicker/css/datepicker.css" rel="stylesheet" media="screen">
     <script language = 'JavaScript' src="../../librerias/js/jquery-1.11.1.min.js"></script>
     <script language = 'JavaScript' src="../../librerias/js/bootstrap.min.js"></script>
    <script language = 'JavaScript' src="../../librerias/datepicker/js/bootstrap-datepicker.js"></script>
	</head>
	<br>
	<br>
	<body>
		<div class = "container">
			<ol class = 'breadcrumb'>
				<li><a href = '../index.php'>Inicio</a></li>
				<li class = 'active'>Ver listado</li>
			</ol>
		<form method = 'POST' action = '../../controlador/comision.php' class = 'form-horizontal' role = 'form'>
			<div class = 'form-group col-lg-2'>
							<label for = 'comision' class = 'control-label'>Comisión</label>
							<select class = 'form-control' name = 'comision' id = 'com' onchange = "comisiones();">
									<?php
										$consulta_mysql='SELECT numero FROM comision';
										$resultado_consulta_mysql=mysql_query($consulta_mysql,$conexion);
										  
										while($fila=mysql_fetch_array($resultado_consulta_mysql)){
										    echo "<option value='".$fila['nombre']."'>".$fila['nombre']."</option>";
										}
									?>
							</select>
						</div>
			<div class = 'container'>
				<fieldset>
					<div class="col-sm-12">
			         	<div class="panel panel-default">
			            	<div class="panel-body">

			           		</div>
			         	</div>
			       	</div>
				</fieldset>
			</div>
		</form>
	</body>
</html>

