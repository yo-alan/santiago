<!DOCTYPE html>
<html lang="es">
	<?php include '../vista/header.php';?>
	<body>
		<?php include '../vista/menu.php';?>
		<div class="container">
			<div class = 'container jumbotron'>
                <div class="col-md-12">
					<form role="form"  method="post" action="../controlador/alumno.php">                    
						<fieldset>
							<legend>Alta Alumno</legend>
							<input type="hidden" name="action" value="agregar">
							<div class="form-group col-md-6">
								<label class="control-label">Apellido:</label>
								<input type="text" class="form-control" name="apellido">
							</div>
							<div class="form-group col-md-6">
								<label class="control-label">Nombre:</label>
								<input type="text" class="form-control" name="nombre">
							</div>
							<div class="form-group col-md-6">
								<label class="control-label">D.N.I.:</label>
								<input type="text" class="form-control" name="documento">
							</div>
							<div class="form-group col-md-6">
								<label class="control-label">Fecha Nacimiento:</label>
								<input type="datetime" class="form-control datepicker" name="f_nacimiento">
							</div>
							<div class="form-group col-md-6">
								<label class="control-label">Direccion:</label>
								<input type="text" class="form-control" name="direccion">
							</div>
							<div class="form-group col-md-6">
								<label class="control-label">Legajo:</label>
								<input type="text" class="form-control" name="legajo">    
							</div>
							<button type = 'submit' class =  'btn btn-primary col-md-2 col-md-offset-6'>Guardar</button> 
						</fieldset>    
					</form>
                </div>
			</div>
			<script>
				$(function () {
				$('.datepicker').datepicker({
					format: "yyyy/mm/dd",
					autoclose: true })
					.on('changeDate', function(e){
						$(this).datepicker('hide');})
				});
			</script>
		</div>
	</body>
</html>
