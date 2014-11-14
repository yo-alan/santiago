<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Bedelía | Crear una clase nueva</title>
		<link href="../../librerias/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="../../librerias/datepicker/css/datepicker.css" rel="stylesheet" media="screen">
		<link href="../../librerias/css/default.css" rel="Stylesheet">
		<script language = "JavaScript" src="../../librerias/js/jquery-1.11.1.min.js"></script>
		<script language = "JavaScript" src="../../librerias/js/bootstrap.min.js"></script>
		<script language = "JavaScript" src="../../librerias/datepicker/js/bootstrap-datepicker.js"></script>
		<script src="../../librerias/js/bootstrap.js"></script>
		<script src="../../librerias/js/twitter-bootstrap-hover-dropdown.min.js"></script>
	</head>
	<body>
		<header>
			<div class="col-md-12 container">
				<nav class="navbar navbar-default" role="navigation">
				  <div class="container-fluid">
					<div class="navbar-header">
					  <a class="navbar-brand" href="../index.php">Inicio</a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					  <ul class="nav navbar-nav">
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-hover="dropdown">Alumnos <span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
                              <li><a href="../../controlador/alumno.php?action=listar">Listado</a></li>
							<li><a href="../../controlador/alumno.php?action=agregar">Agregar</a></li>
						  </ul>
						</li>
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-hover="dropdown">Cursadas <span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
                              <li><a href="../../controlador/cursada.php?action=listar">Listado</a></li>
							<li><a href="../../controlador/cursada.php?action=agregar">Agregar</a></li>
						  </ul>
						</li>
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-hover="dropdown">Comisión <span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="../../controlador/comision.php?action=agregar">Agregar</a></li>
						  </ul>
						</li>
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-hover="dropdown">Clases <span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="../../controlador/clase.php?action=agregar">Agregar</a></li>
							<li><a href="../../controlador/asistencia.php?action=seleccionarClase">Registro de asistencias</a></li>
						  </ul>
						</li>
					  </ul>
					</div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
			</div>
		</header>
		<div class="container col-md-8 col-md-offset-2 jumbotron">
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
						<input type="text" class="form-control" name="aula">
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
