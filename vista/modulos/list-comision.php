<html>
	<head>
		<title>Bedel&iacute;a | Listado de comisiones</title>
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
        <div class="container">
            <ol class = 'breadcrumb'>
                <li><a href = '../index.php'>Inicio</a></li>
                <li class = 'active'>Listado de Comisiones</li>	
            </ol>
        </div>
        <div class="container">
            <div class="jumbotron">
                <table class="table table-striped tablaData">
                    <thead>
                        <tr>
                            <th>Cod.Comision</th>
                            <th>Cod. Carrera</th>
                            <th>Materia</th>
                            <th>Anio</th>
                            <th>Nro Comision</th>
                            <th>Enlazar Alum.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($cp as $c):?>
                        <tr>
                            <td><?php echo $c->getId_comision()?></td>
                            <td><?php echo $c->getCarrera()?></td>
                            <td><?php echo $c->getNombre_materia()?></td>
                            <td><?php echo $c->getAnio()?></td>
                            <td><?php echo $c->getNumero()?></td>
                            <td>
                                <a href="?action=enlazarAlumno&comision=<?php echo $c->getId_comision()?>"><i class="glyphicon glyphicon-list-alt"></i></a>
                            </td>
                        <?php endforeach;?>
                    </tbody>
                </table>    
            </div>
        </div>
    </body>
</html>
