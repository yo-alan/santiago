<html>
    <?php include '../vista/header.php';?>
	<body>
		<?php include '../vista/menu.php';?>
		<div class="container">
			<div class="col-md-8 col-md-offset-2 jumbotron">
				<form role="form" class="form-horizontal" method="POST" action="asistencia.php">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Comision</th>
								<th>Materia</th>
								<th>Profesor</th>
								<th>Registrar asistencias</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($cs as $c): ?>
							<tr>
								<td>
									<?php echo $c->getComision()->getNumero(); ?>
								</td>
								<td>
									<?php echo $c->getComision()->getNombre_materia(); ?>
								</td>
								<td>
									<?php echo $c->getProfesor(); ?>
								</td>
								<td>
									<a href="asistencia.php?action=registrar&clase=<?php echo $c->getId_clase(); ?>"><i class="glyphicon glyphicon-check"></i></a>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
						<?php if(!sizeof($cs)): ?>
						<tfoot>
							<tr>
								<td colspan="4">No hay clases cargadas.</td>
							</tr>
						</tfoot>
						<?php endif; ?>
					</table>
				</form>
			</div>
		</div>
	</body>
</html>
