<html>
	<?php include '../vista/header.php';?>
	<body>
		<?php include '../vista/menu.php';?>
		<div class="container">
			<div class="jumbotron">
				<table class="table">
					<thead>
						<tr>
							<th>Cod.Carrera</th>
							<th>Materia</th>
							<th>Cod_Mat</th>
							<th>Anio</th>
							<th>Cuatr.</th>
							<th>Agregar Nro de Comision</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($cp as $c):?>
						<tr>
							<form method="POST" action='./../controlador/comision.php'>
							<td><label><?php echo $c->getId_carrera();?></label>
								<input type = 'hidden' class = 'form-control' name = 'carrera' value = <?php echo $c->getId_carrera()?> ></td>
							<td><label><?php echo $c->getNombre_materia();?></label>
								<input type = 'hidden' class = 'form-control' name = 'nombre_materia' value =<?php echo $c->getNombre_materia()?>></td>
							<td><label><?php echo $c->getMateria();?></label>
								<input type = 'hidden' class = 'form-control' name = 'materia' value =<?php echo $c->getMateria()?>></td>
							<td><label><?php echo $c->getAnio();?></label>
								<input type = 'hidden' class = 'form-control' name = 'anio' value =<?php echo $c->getAnio()?>></td>
							<td><label><?php echo $c->getCuatrimestre();?></label>
								<input type = 'hidden' class = 'form-control' name = 'cuatrimestre' value =<?php echo $c->getCuatrimestre()?>></td>
							<td><input type = 'text' class = 'form-control' name = 'numero'></td>
							<td><button type = 'submit' name = 'action' value = 'agregar' class =  'btn btn-primary col-md col-md-offset-6'>Agregar</button></td>
							</form>
						</tr>
						<?php endforeach;?>
					</tbody>
				</table>    
			</div>
		</div>
	</body>
</html>
