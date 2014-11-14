<html>
	<head>
	<?php include '../vista/header.php';?>
    <body>
		<?php include '../vista/menu.php';?>
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
                                <a href="?action=addAlumno&comision=<?php echo $c->getId_comision()?>"><i class="glyphicon glyphicon-list-alt"></i></a>
                            </td>
                        <?php endforeach;?>
                    </tbody>
                </table>    
            </div>
        </div>
    </body>
</html>
