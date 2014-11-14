<html>
	<?php include '../vista/header.php';?>
	<body>
		<?php include '../vista/menu.php';?>
		<article>
			<div class="container col-md-8 col-md-offset-2 jumbotron">
				<form role="form" class="form-horizontal" method="POST" action="asistencia.php">
					<input type="hidden" name="action" value="registrar">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Alumno</th>
								<th>Presente</th>
								<th>Justificada</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 0; ?>
							<?php foreach($as as $a): ?>
							<tr>
								<td>
									<input type="hidden" name="alumno<?php echo $i; ?>[documento]" value="<?php echo $a->getDocumento(); ?>">
									<?php echo $a->getApellido(). ", ". $a->getNombre(); ?>
								</td>
								<td>
									<div class="form-group">
										<input type="checkbox" name="alumno<?php echo $i; ?>[presente]">
									</div>
								</td>
								<td>
									<select class="form-control" name="alumno<?php echo $i; ?>[justificada]">
										<option value="0">No</option>
										<option value="1">Si</option>
									</select>
								</td>
							</tr>
							<?php $i++; ?>
							<?php endforeach; ?>
						</tbody>
					</table>
					<div class="form-group">
						<div class="col-md-offset-10">
							<button type='submit' class='btn btn-primary'>Guardar</button>
						</div>
					</div>
				</form>
			</div>
		</article>
	</body>
</html>
