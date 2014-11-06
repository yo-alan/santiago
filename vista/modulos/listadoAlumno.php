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
		<div class='container'>
			<ol class = 'breadcrumb'>
				<li><a href = '../vista/index.php'>Inicio</a></li>
				<li class = 'active'>Alumnos</li>
			</ol>
		</div>
		<div class="container">
			<div class="jumbotron">
                <div>
                    <form action="../controlador/alumno.php" method="post">
                        <label for="filtroCarrera">Carrera:</label>
                        <select name="filtroCarrera" id="filtroCarrera">
                            <?php 
                            foreach($carrera as $a):
                                echo "<option value='$a'>$a</option>";
                            endforeach;
                            ?>
                        </select>
                        <label for="filtroCursada">Cursada:</label>
                        <select name="filtroCursada" id="filtroCursada">
                            <?php 
                            foreach($anios as $a):
                                echo "<option value='$a'>$a</option>";
                            endforeach;
                            ?>
                        </select>
                    </form>
                </div>
				<table class="table table-striped tablaData">
					<thead>
						<tr>
							<th>Apellido</th>
							<th>Nombre</th>
							<th>Documento</th>
							<th>F. Nacimiento</th>
							<th>Legajo</th>
							<th>Direcci&oacute;n</th>
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
	</body>
</html>
