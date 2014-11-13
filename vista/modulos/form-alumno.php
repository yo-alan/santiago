<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Bedelía | Alta de alumno</title>
		<link href="../librerias/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="../librerias/datepicker/css/datepicker.css" rel="stylesheet" media="screen">
		<link href="../librerias/css/default.css" rel="Stylesheet">
		<script language = "JavaScript" src="../librerias/js/jquery-1.11.1.min.js"></script>
		<script language = "JavaScript" src="../librerias/js/bootstrap.min.js"></script>
		<script language = "JavaScript" src="../librerias/datepicker/js/bootstrap-datepicker.js"></script>
		<script src="../librerias/js/bootstrap.js"></script>
		<script src="../librerias/js/twitter-bootstrap-hover-dropdown.min.js"></script>
	</head>
	<body>
		<header>
			<div class="container col-md-12">
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
                              <li><a href="../controlador/alumno.php?action=listar">Listado</a></li>
							<li><a href="../controlador/alumno.php?action=agregar">Agregar</a></li>
						  </ul>
						</li>
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-hover="dropdown">Cursadas <span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
                              <li><a href="../controlador/cursada.php?action=listar">Listado</a></li>
							<li><a href="../controlador/cursada.php?action=agregar">Agregar</a></li>
						  </ul>
						</li>
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-hover="dropdown">Comisi&oacute;n <span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="../controlador/comision.php?action=listar">Listado</a></li>
							<li><a href="../controlador/comision.php?action=agregar">Agregar</a></li>
						  </ul>
						</li>
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-hover="dropdown">Clases <span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="../controlador/clase.php?action=agregar">Agregar</a></li>
							<li><a href="../controlador/asistencia.php?action=seleccionarClase">Registro de asistencias</a></li>
						  </ul>
						</li>
					  </ul>
					</div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
			</div>
		</header>
		<article>
			<div class = 'container'>
				<form role="form" class="form-horizon tal col-lg-2" method="post" action="../../controlador/alumno.php">
					<fieldset>
						<legend>Alta Alumno</legend>
						<input type="hidden" name="action" value="agregar">
						<div class="form-group">
							<label class="control-label">Apellido:</label>
							<input type="text" class="form-control" name="apellido">
						</div>
						<div class="form-group">
							<label class="control-label">Nombre:</label>
							<input type="text" class="form-control" name="nombre">
						</div>
						<div class="form-group">
							<label class="control-label">D.N.I.:</label>
							<input type="text" class="form-control" name="documento">
						</div>
						<div class="form-group">
							<label class="control-label">Fecha Nacimiento:</label>
							<input type="datetime" class="form-control datepicker" name="f_nacimiento">
						</div>
						<div class="form-group">
							<label class="control-label">Direccion:</label>
							<input type="text" class="form-control" name="direccion">
						</div>
						<div class="form-group">
							<label class="control-label">Legajo:</label>
							<input type="text" class="form-control" name="legajo">    
						</div>
						<button type = 'submit' class =  'btn btn-primary col-md col-md-offset-6'>Guardar</button> 
					</fieldset>    
				</form>
			</div>
			<script>
				$(function () {
				$('.datepicker').datepicker({
					format: "yyyy/mm/dd",
					autoclose: true })
					.on('changeDate', function(e){
						$(this).datepicker('hide');})
			  
				});
			</script>
		</article>
	</body>
</html>
