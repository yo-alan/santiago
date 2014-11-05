<html>
	<head>
		<meta charset="utf-8">
		<title>Bedelía | Listado de alumnos</title>
		<link rel="Stylesheet" href="css/bootstrap.css">
		<link rel="Stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/jquery.dataTables.css">
        <link rel="stylesheet" href="css/jquery.dataTables_themeroller.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/twitter-bootstrap-hover-dropdown.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/listadosTabla.js"></script>
	</head>
	<body>
		<div class='container'>
			<ol class = 'breadcrumb'>
				<li><a href = 'index.php'>Inicio</a></li>
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
	</body>
</html>
