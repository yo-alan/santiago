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
			<div class="container col-md-8 col-md-offset-2 jumbotron">
				<form role="form" class="form-horizontal" method="POST" action="asistencia.php">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Comision</th>
								<th>Materia</th>
								<th>Profesor</th>
								<th>Registrar asistencias</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($cs as $c): ?>
							<tr>
								<td>
									<?php echo $c->getComision()->getNumero(); ?>
								</td>
								<td>
									<?php echo $c->getComision()->getNombre_materia(); ?>
								</td>
								<td>
									<?php echo $c->getProfesor(); ?>
								</td>
								<td>
									<a href="asistencia.php?action=registrar&clase=<?php echo $c->getId_clase(); ?>"><i class="glyphicon glyphicon-check"></i></a>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</form>
			</div>
		</article>
	</body>
</html>
