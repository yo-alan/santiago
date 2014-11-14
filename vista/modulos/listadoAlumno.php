<html>
	<head>
		<title>Bedel&iacute;a | Listado de Alumnos</title>
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
		<div class="container">
			<div class="jumbotron">
                <div class="col-md-12">
                    <form action="../controlador/alumno.php" method="GET" class="form-inline col-md-10" role="form">
                        <fieldset>
                            <legend>Seleccione Carrera y Cursada:</legend>
                        <input type="hidden" name="action" value="listar">
                        <div class="form-group">
                            <label for="filtroCarrera">Carrera:</label>
                            <select name="filtroCarrera" id="filtroCarrera" class="form-control">
                                <?php 
                                foreach($carrera as $a):
                                    echo "<option value='$a'>$a</option>";
                                endforeach;
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="filtroCursada">Cursada:</label>
                            <select name="filtroCursada" id="filtroCursada" class="form-control">
                                <?php 
                                foreach($anios as $a):
                                    echo "<option value='$a'>$a</option>";
                                endforeach;
                                ?>
                            </select>
                        </div>    
                        <input type="submit" value="Listar" class=" btn">
                            </fieldset>    
                    </form>
                    <div class="col-md-2"></div>
                    <a href="?action=print&filtroCarrera=<?php echo $_GET['filtroCarrera']?>&filtroCursada=<?php echo $_GET['filtroCursada']?>" class="btn btn-primary glyphicon glyphicon-print">&nbsp;Imprimir</a>
                </div>
				<table class="table table-striped tablaData">
					<thead>
						<tr>
							<th>Apellido</th>
							<th>Nombre</th>
							<th>Documento</th>
							<th>Anio</th>
							<th>Carrera</th>
							<th>Comision</th>
						</tr>
					</thead>
					<tbody>
						<?php
                        if(count($as)>0){
                            foreach($as as $a):?>
						<tr>
							<td><?php echo $a['apellido']?></td>
							<td><?php echo $a['nombrealumno']?></td>
							<td><?php echo $a['documento']?></td>
							<td><?php echo $a['anio']?></td>
							<td><?php echo $a['carrera' ]?></td>
							<td><?php echo $a['comision']?></td>
						</tr>
						<?php endforeach;
                        }else{
                            echo '<tr>
							         <td></td><td></td><td></td><td></td><td></td><td></td>
						          </tr>';
                        }
                        ?>
					</tbody>
				</table>    
			</div>   
		</div>
	</body>
</html>
