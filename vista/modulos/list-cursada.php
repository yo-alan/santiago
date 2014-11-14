<html>
	<?php include '../vista/header.php';?>
	<body>
		<?php include '../vista/menu.php';?>
        <div class="container">
            <div class="jumbotron">
                <table class="table table-striped tablaData">
                    <thead>
                        <tr>
                            <th>Cod.Carrera</th>
                            <th>Materia</th>
                            <th>Inicio Cursada</th>
                            <th>Fin Cursada</th>
                            <th>Cuatr.</th>
                            
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
                            
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>    
            </div>
        </div>
	</body>
</html>
