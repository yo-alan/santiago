<php ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Plantilla básica de alta cursada</title>
 
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
     <link href="../datepicker/css/datepicker.css" rel="stylesheet" media="screen">
     <script language = 'JavaScript' src="../js/jquery-1.11.1.min.js"></script>
     <script language = 'JavaScript' src="../js/jquery-ui.min.js"></script>
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
				<div class = 'form-group'>
					<label for= 'inicio' class ='col-lg-2 control-label'>Inicio</label>
					<input type = 'datetime' class = 'form-control datepicker' name = 'inicio'></input>
				</div>
				<div class = 'form-group'>
					<label for = 'fin' class = 'col-lg-2 control-label'>Fin</label>
					<input type = 'datetime' class = 'form-control datepicker' name = 'fin'>
				</div>
				<div class = 'form-group'>
					<label for = 'anio' class = 'col-lg-2 control-label'>Año</label>
					<input type = 'datetime' class = 'form-control datepicker1' name = 'anio'>
				</div>
				<div class = 'form-group'>
					<label for = 'cuatrimestre' class = 'col-lg-2 control-label'>Cuatrimestre</label>
					<select class = 'col-lg-8 form-control' name = 'cuatrimestre'>
						<option>1° cuatrimestre</option>
						<option>2° cuatrimestre</option>
					</select>
				</div>
				<div class = 'form-group'>
					<label for = 'materia' class = 'col-lg-2 control-label'>Materia</label>
					<select class = 'col-lg-2' name = 'materia'>
						<option value="matematica">Matemática</option>
						<option>Base de Datos I</option>
						<option>Base de Datos II</option>
						<option>Ingeniería en Software</option>
						<option>Laboratorio de Programación I</option>
					</select>
				</div>
				<div class = 'form-group'>
					<label for = 'carrera' class = 'col-lg-2 control-label'>Carrera</label>
					<select class = 'col-lg-2' name = 'carrera'>
						<option value="SFW">Tecnicatura en Software</option>
						<option value="RED">Tecnicatura en Redes</option>
						<option value="ENF">Tecnicatura en Enfermería</option>
					</select>
				</div>
					<input type = 'hidden' name='tipoFormulario' value="form-cursada">
				<div>
				</div>
					<button type = 'submit' class =  'btn btn-primary col-md col-md-offset-4'>Enviar</button>
				<div>
			</div>
		</form>
	 </div>
	  <script>
		  $(function () {
			  $('.datepicker').datepicker();
		  });
	  </script>
	  <script>
		  $(function () {
			  $('.datepicker1').datepicker({
				format: " yyyy",
				viewMode: "years", 
				minViewMode: "years" });
		  });
	  </script>
  </body>
</html>

