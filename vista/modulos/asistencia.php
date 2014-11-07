<html>
	<head>
		<title>Bedel&iacute;a | Registro de asistencias</title>
		<link rel="Stylesheet" href="../librerias/css/bootstrap.css">
		<link rel="Stylesheet" href="../librerias/css/default.css">
		<script src="../librerias/js/jquery.js"></script>
		<script src="../librerias/js/bootstrap.js"></script>
		<script src="../librerias/js/twitter-bootstrap-hover-dropdown.min.js"></script>
	</head>
	<body>
		<header>
			<div class="container col-md-12">
				<nav class="navbar navbar-default" role="navigation">
				  <div class="container-fluid">
					<div class="navbar-header">
					  <a class="navbar-brand" href="#">Inicio</a>
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
							<li><a href="../controlador/asistencia.php?action=registrar">Registro de asistencias</a></li>
						  </ul>
						</li>
					  </ul>
					</div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
			</div>
		</header>
		<article>
			<div class="container col-md-8 col-md-offset-2 alert alert-success">
				<form role="form" class="form-horizontal" method="POST" action="asistencia.php">
					<input type="hidden" name="action" value="registrar">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Alumno</th>
								<th>Presente</th>
								<th>Justificada</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 0; ?>
							<?php foreach($as as $a): ?>
							<tr>
								<td>
									<input type="hidden" name="alumno<?php echo $i; ?>[documento]" value="<?php echo $a->getDocumento(); ?>">
									<?php echo $a->getApellido(). ", ". $a->getNombre(); ?>
								</td>
								<td>
									<div class="checkbox">
										<label>
											<input type="checkbox" name="alumno<?php echo $i; ?>[presente]">
										</label>
									</div>
								</td>
								<td>
									<select name="alumno<?php echo $i; ?>[justificada]">
										<option value="0">No</option>
										<option value="1">Si</option>
									</select>
								</td>
							</tr>
							<?php $i++; ?>
							<?php endforeach; ?>
						</tbody>
					</table>
					<div class="form-group">
						<div class="col-md-offset-10">
							<button type='submit' class='btn btn-primary'>Guardar</button>
						</div>
					</div>
				</form>
			</div>
		</article>
	</body>
</html>
