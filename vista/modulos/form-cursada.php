<php ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Plantilla básica de alta cursada</title>
 
    <link href="../../librerias/css/bootstrap.min.css" rel="stylesheet" media="screen">
     <link href="../../librerias/datepicker/css/datepicker.css" rel="stylesheet" media="screen">
     <script language = 'JavaScript' src="../../librerias/js/jquery-1.11.1.min.js"></script>
     <script language = 'JavaScript' src="../../librerias/js/bootstrap.min.js"></script>
    <script language = 'JavaScript' src="../../librerias/datepicker/js/bootstrap-datepicker.js"></script>
    <script language = 'JavaScript' src="../../librerias/js/selectCursada.js"></script>
  </head>
  <br>
  <br>
  <body onload = "selectMateria();">
	 <div class = 'container'>
		<ol class = 'breadcrumb'>
			<li><a href = '../index.php'>Inicio</a></li>
			<li class = 'active'>Agregar Cursada</li>
		</ol>
		<br>
		<br>
			<form method = 'POST' action = '../../controlador/cursada.php' class = 'form-horizontal' role = 'form'>
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
						<label for = 'carrera' class = 'control-label'>Carrera</label>
						<select class = 'form-control' name = 'carrera' id = 'carr' onchange = "selectMateria();">
							<option></option>
							<option value="SFW">Tecnicatura en Software</option>
							<option value="RED">Tecnicatura en Redes</option>
							<option value="ENF">Tecnicatura en Enfermería</option>
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

