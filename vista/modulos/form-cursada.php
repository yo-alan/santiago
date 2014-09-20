<php ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Plantilla básica de alta cursada</title>
 
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
     <link href="../datepicker/css/datepicker.css" rel="stylesheet" media="screen">
     <script language = 'JavaScript' src="../js/jquery-1.11.1.min.js"></script>
     <script language = 'JavaScript' src="../js/bootstrap.min.js"></script>
    <script language = 'JavaScript' src="../datepicker/js/bootstrap-datepicker.js"></script>
  </head>
  <br>
  <br>
  <body>
	 <div class = 'container'>
		<div>
			<h1 class = 'text-center'>Alta de nueva Cursada</h1>
		</div>
		<br>
		<br>
			<form method = 'POST' action = '../../index.php' class = 'form-horizontal' role = 'form'>
				<div class = 'row'>
					<div class = 'form-group col-lg-2'>
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
						<label for = 'anio' class = 'control-label'>Año</label>
						<select class = 'form-control' name = 'anio'>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
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
						<label for = 'materia' class = 'control-label'>Materia</label>
						<select class = 'form-control' name = 'materia'>
							<?php //Esto se deberia hacer con un arreglo en php, donde los values son los codigos de la carrera?>
							<option>Matemática</option>
							<option>Base de Datos I</option>
							<option>Base de Datos II</option>
							<option>Ingeniería en Software</option>
							<option>Laboratorio de Programación I</option>
						</select>
					</div>
				</div>
				<div class = 'row'>
					<div class = 'form-group col-lg-2'>
						<label for = 'carrera' class = 'control-label'>Carrera</label>
						<select class = 'form-control' name = 'carrera'>
							<option value="SFW">Tecnicatura en Software</option>
							<option value="RED">Tecnicatura en Redes</option>
							<option value="ENF">Tecnicatura en Enfermería</option>
						</select>
					</div>
				</div>
					<input type = 'hidden' name='tipoFormulario' value="form-cursada">
					<button type = 'submit' class =  'btn btn-primary col-md col-md-offset-2'>Enviar</button>
				<div>
			</div>
		</form>
	 </div>
	  <script>
		  $(function () {
			  $('.datepicker').datepicker({
				  autoclose: true })
				  .on('changeDate', function(e){
					  $(this).datepicker('hide');})
			  
		  });
	  </script>
  </body>
</html>

