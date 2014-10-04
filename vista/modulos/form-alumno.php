<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Plantilla básica de alta alumno</title>
 
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
			<ol class = 'breadcrumb'>
				<li><a href = '../index.php'>Inicio</a></li>
				<li class = 'active'>Agregar Alumno</li>
			</ol>
<<<<<<< HEAD
			<form role="form" class="form-horizon tal col-lg-2" method="post" action="../../controlador/alumno.php">
=======
			<form role="form" class="form-horizon tal col-lg-2" method="post" action="alumno.php">
>>>>>>> 4da051fca3e8442f33ba37b3852d76c5249259cd
				<fieldset>
					<legend>Alta Alumno</legend>
					<input type="hidden" name="action" value="agregar">
					<div class="form-group">
						<label class="control-label">Apellido:</label>
						<input type="text" class="form-control" name="apellido">
					</div>
					<div class="form-group">
						<label class="control-label">Nombre:</label>
						<input type="text" class="form-control" name="nombre">
					</div>
					<div class="form-group">
						<label class="control-label">D.N.I.:</label>
						<input type="text" class="form-control" name="documento">
					</div>
					<div class="form-group">
						<label class="control-label">Fecha Nacimiento:</label>
						<input type="datetime" class="form-control datepicker" name="f_nacimiento">
					</div>
					<div class="form-group">
						<label class="control-label">Direccion:</label>
						<input type="text" class="form-control" name="direccion">
					</div>
					<div class="form-group">
						<label class="control-label">Legajo:</label>
						<input type="text" class="form-control" name="legajo">    
					</div>
					<button type = 'submit' class =  'btn btn-primary col-md col-md-offset-6'>Guardar</button> 
				</fieldset>    
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
