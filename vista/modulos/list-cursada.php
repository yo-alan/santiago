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
	</body>
</div>
