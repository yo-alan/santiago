<!DOCTYPE html>
<html lang="es">
	<?php include '../vista/header.php';?>
	<body>
		<?php include '../vista/menu.php';?>
		<div class="container col-md-8 col-md-offset-2 jumbotron">
			<legend>Alta de clase</legend>
			<form role="form" class="form-horizontal col-md-12 col-md-offset-2" method="POST" action="../../controlador/clase.php">
				<input type="hidden" name="action" value="agregar">
				<input type="hidden" name="comision" value="<?php echo $comision ?>">
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
						<input type="time" class="form-control" name="hora_inicio">
					</div>
				</div>
				<div class="form-group">
					<label for="hora_fin" class="col-sm-2 control-label">Hora de finalizacion</label>
					<div class="col-sm-4">
						<input type="time" class="form-control" name="hora_fin">
					</div>
				</div>
				<div class="form-group">
					<label for="aula" class="col-sm-2 control-label">Aula</label>
					<div class="col-sm-4">
						<input type="number" class="form-control" name="aula">
					</div>
				</div>
				<div class="form-group">
					<label for="dictada" class="col-sm-2 control-label">Dictada</label>
					<div class="col-sm-4">
						<select class="form-control" name="dictada">
							<option value="si">Si</option>
							<option value="no">No</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="recuperatoria_de" class="col-sm-2 control-label">Recuperatoria</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="recuperatoria_de">
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
						<input type="time" class="form-control" name="hora_ingreso_profesor">
					</div>
				</div>
				<div class="form-group">
					<label for="hora_salida_profesor" class="col-sm-2 control-label">Hora salida</label>
					<div class="col-sm-4">
						<input type="time" class="form-control" name="hora_salida_profesor">
					</div>
				</div>
				<button type = "submit" class =  "btn btn-primary col-md col-md-offset-4">Guardar</button>
			</form>
		</div>
	</body>
</html>
