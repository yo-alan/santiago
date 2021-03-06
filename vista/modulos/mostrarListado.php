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
		<title>Bedelía | Listado de alumnos</title>
		<link href="../../librerias/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="../../librerias/datepicker/css/datepicker.css" rel="stylesheet" media="screen">
		<script language = 'JavaScript' src="../../librerias/js/jquery-1.11.1.min.js"></script>
		<script language = 'JavaScript' src="../../librerias/js/bootstrap.min.js"></script>
		<script language = 'JavaScript' src="../../librerias/datepicker/js/bootstrap-datepicker.js"></script>
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
			<div class="container">
				<form method = 'POST' action = '../../controlador/comision.php' class = 'form-horizontal' role = 'form'>
					<div class = 'form-group col-lg-2'>
						<label for = 'comision' class = 'control-label'>Comisión</label>
						<select class = 'form-control' name = 'comision' id = 'com'>
								<?php 
								
								$conn = new Conexion();
								
								$sql = 'SELECT numero FROM comision';
								
								$consulta = $conn->prepare($sql);
								
								$consulta->setFetchMode(PDO::FETCH_ASSOC);

								try{
									
									$consulta->execute();
									
									$results = $consulta->fetch();
									
									while($fila=mysql_fetch_array($results)){
										echo "<option value='".$fila['numero']."'>".$fila['numero']."</option>";
									}
								}catch(PDOException $e){
									
								}
								
								return $c;
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
			</div>
		</article>
	</body>
</html>

