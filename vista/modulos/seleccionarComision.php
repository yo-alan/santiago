<html>
    <?php include '../vista/header.php';?>
	<body>
		<?php include '../vista/menu.php';?>
		<div class="container">
            <div class="jumbotron">
                <table class="table table-striped tablaData">
                    <thead>
                        <tr>
                            <th>Carrera</th>
                            <th>N&uacute;mero Comisi&oacute;n</th>
                            <th>Materia</th>
                            <th>A&ntilde;o</th>
                            <th>Agregar clase</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($cs as $c):?>
                        <tr>
                            <?php if($c->getCarrera() == "ENF"): ?>
                            <td><?php echo "Enfermería" ?></td>
                            <?php elseif($c->getCarrera() == "SFW"): ?>
                            <td><?php echo "Software" ?></td>
                            <?php else: ?>
                            <td><?php echo "Redes y Tel." ?></td>
                            <?php endif; ?>
                            <td><?php echo $c->getNumero()?></td>
                            <td><?php echo $c->getNombre_materia()?></td>
                            <td><?php echo $c->getAnio()?></td>
                            <td>
                                <a href="clase.php?action=agregar&comision=<?php echo $c->getId_comision()?>"><i class="glyphicon glyphicon-list-alt"></i></a>
                            </td>
                        <?php endforeach;?>
                    </tbody>
						<?php if(!sizeof($cs)): ?>
						<tfoot>
							<tr>
								<td colspan="5">No hay comisiones cargadas.</td>
							</tr>
						</tfoot>
						<?php endif; ?>
                </table>    
            </div>
        </div>
	</body>
</html>
