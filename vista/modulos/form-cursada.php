<!DOCTYPE html>
<html lang="es">
	<?php include '../vista/header.php'?>
	<body onload = "selectMateria();">
		<?php include '../vista/menu.php';?>
		<div class = 'container'>
            <div class="jumbotron">
			<form method = 'POST' action = '../controlador/cursada.php' class = 'form-horizontal' role = 'form'>
				<div class = 'row'>
					<div class = 'form-group col-lg-2'>
						<legend>Alta Cursada</legend>
						<label for= 'inicio' class ='control-label'>Inicio</label>
						<input type = 'datetime' class = 'datepicker form-control' name = 'inicio'></input>
					</div>
				</div>
				<div class = 'row'>
					<div class = 'form-group col-lg-2'>
						<label for = 'fin' class = 'control-label'>Fin</label>
						<input type = 'datetime' class = 'form-control datepicker' name = 'fin'>
					</div>
				</div>
				<div class = 'row'>
					<div class = 'form-group col-lg-2'>
						<label for = 'anio' class = 'control-label'>A&ntilde;o</label>
						<input type = 'text' class = 'form-control' name = 'anio'>
					</div>
				</div>
				<div class = 'row'>
					<div class = 'form-group col-lg-2'>
						<label for = 'cuatrimestre' class = 'control-label'>Cuatrimestre</label>
						<select class = 'form-control' name = 'cuatrimestre'>
							<option value="1">1</option>
							<option value="2">2</option>
						</select>
					</div>
				</div>
				<div class = 'row'>
					<div class = 'form-group col-lg-2'>
						<label for = 'carrera' class = 'control-label'>Carrera</label>
						<select class = 'form-control' name = 'carrera' id = 'carr' onchange = "selectMateria();">
							<option></option>
							<option value="SFW">Tecnicatura en Software</option>
							<option value="RED">Tecnicatura en Redes</option>
							<option value="ENF">Tecnicatura en Enfermer&iacute;a</option>
						</select>
					</div>
				</div>
				<div class = 'row'>
					<div class = 'form-group col-lg-2'>
						<label for = 'materia' class = 'control-label'>Materia</label>
						<select class = 'form-control' name = 'materia' id = 'mat'>
						</select>
					</div>
				</div>
					<input type = 'hidden' name='action' value="agregar">
					<button type = 'submit' class =  'btn btn-primary col-md col-md-offset-2'>Enviar</button>
				<div>
			</div>
		</form>
        </div>	
    </div>
		<script>
		  $(function () {
			  $('.datepicker').datepicker({
				  format: 'yyyy/mm/dd',
				  autoclose: true })
				  .on('changeDate', function(e){
					  $(this).datepicker('hide');})
			  
		  });
		</script>
	</body>
</html>

