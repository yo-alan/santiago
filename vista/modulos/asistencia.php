<html>
	<head>
		<meta charset="utf-8">
		<title>Bedelía | Registro de asistencias</title>
		<link rel="Stylesheet" href="../librerias/css/bootstrap.css">
		<link rel="Stylesheet" href="../librerias/css/default.css">
		<script src="../librerias/js/jquery.js"></script>
		<script src="../librerias/js/bootstrap.js"></script>
		<script src="../librerias/js/twitter-bootstrap-hover-dropdown.min.js"></script>
	</head>
	<body>
		<header >
			<div class="col-md-12    container">
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
						  <a href="#" class="dropdown-toggle" data-hover="dropdown">Comisión <span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="../controlador/comision.php?action=listar">Listado</a></li>
							<li><a href="../controlador/comision.php?action=agregar">Agregar</a></li>
						  </ul>
						</li>
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-hover="dropdown">Clases <span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="../controlador/clase.php?action=agregar">Agregar</a></li>
							<li><a href="../controlador/asistencia.php?action=listar">Registro de asistencias</a></li>
						  </ul>
						</li>
					  </ul>
					</div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
			</div>
		</header>
		<article>
			<div class='container'>
				<ol class = 'breadcrumb'>
					<li><a href = '../index.php'>Inicio</a></li>
					<li class = 'active'>Alumnos</li>
				</ol>
			</div>
			<div class="container">
				<div class="jumbotron">
					<table class="table table-striped tablaData">
						<thead>
							<tr>
								<th>Apellido</th>
								<th>Nombre</th>
								<th>Documento</th>
								<th>F. Nacimiento</th>
								<th>Legajo</th>
								<th>Dirección</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($as as $a):?>
							<tr>
								<td><?php echo $a->getApellido()?></td>
								<td><?php echo $a->getNombre()?></td>
								<td><?php echo $a->getDocumento()?></td>
								<td><?php echo $a->getF_nacimiento()?></td>
								<td><?php echo $a->getLegajo()?></td>
								<td><?php echo $a->getDireccion()?></td>
							</tr>
							<?php endforeach;?>
						</tbody>
					</table>    
				</div>
			</div>
		</article>
	</body>
</html>
