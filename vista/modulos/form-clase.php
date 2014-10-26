<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Crear una clase nueva</title>
		<link href="../../librerias/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="../../librerias/datepicker/css/datepicker.css" rel="stylesheet" media="screen">
		<script language = "JavaScript" src="../../librerias/js/jquery-1.11.1.min.js"></script>
		<script language = "JavaScript" src="../../librerias/js/bootstrap.min.js"></script>
		<script language = "JavaScript" src="../../librerias/datepicker/js/bootstrap-datepicker.js"></script>
	</head>
	<body>
		<div class = "container">
			<ol class = "breadcrumb">
				<li><a href="../index.php">Inicio</a></li>
				<li class = "active">Crear clase</li>
			</ol>
			<form role="form" class="form-horizontal" method="POST" action="../../controlador/clase.php">
				<legend>Alta de clase</legend>
				<input type="hidden" name="action" value="agregar">
				<div class="form-group">
					<label for="obligatorio" class="col-sm-2 control-label">Obligatorio</label>
					<div class="col-sm-4">
						<select class="form-control" name="obligatorio">
							<option value="si">Si</option>
							<option value="no">No</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="hora_inicio" class="col-sm-2 control-label">Hora de inicio</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="hora_inicio">
					</div>
				</div>
				<div class="form-group">
					<label for="hora_fin" class="col-sm-2 control-label">Hora de finalizacion</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="hora_fin">
					</div>
				</div>
				<div class="form-group">
					<label for="aula" class="col-sm-2 control-label">Aula</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="aula">
					</div>
				</div>
				<div class="form-group">
					<label for="dictada" class="col-sm-2 control-label">Dictada</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="dictada">
					</div>
				</div>
				<div class="form-group">
					<label for="recuperatoria_de" class="col-sm-2 control-label">Recuperatoria</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="recuperatoria_de">
					</div>
				</div>
				<div class="form-group">
					<label for="comision" class="col-sm-2 control-label">Comision</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="comision">
					</div>
				</div>
				<div class="form-group">
					<label for="profesor" class="col-sm-2 control-label">Profesor</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="profesor">
					</div>
				</div>
				<div class="form-group">
					<label for="hora_ingreso_profesor" class="col-sm-2 control-label">Hora ingreso</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="hora_ingreso_profesor">
					</div>
				</div>
				<div class="form-group">
					<label for="hora_salida_profesor" class="col-sm-2 control-label">Hora salida</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="hora_salida_profesor">
					</div>
				</div>
				<button type = "submit" class =  "btn btn-primary col-md col-md-offset-4">Guardar</button>
			</form>
		</div>
	</body>
</html>
