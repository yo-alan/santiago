<php ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Mensaje de error</title>
 
    <link href= "../../librerias/css/bootstrap.min.css" rel="stylesheet" media="screen">
     <link href= "../../librerias/datepicker/css/datepicker.css" rel="stylesheet" media="screen">
     <script language = 'JavaScript' src= "../../librerias/js/jquery-1.11.1.min.js"></script>
     <script language = 'JavaScript' src= "../../librerias/js/bootstrap.min.js"></script>
    <script language = 'JavaScript' src= "../../librerias/datepicker/js/bootstrap-datepicker.js"></script>
  </head>
  <br>
  <br>
  <body>
	 <div class = 'container'>
		<ol class = 'breadcrumb'>
			<li><a href = '../../index.php'>Inicio</a></li>
			<li><a href = './form-alumno.php'>Agregar Alumno</a></li>
			<li class = 'active'>Error</li>
		</ol>
		<br>
		<br>
		<div><p class = 'text-danger'>Error en la carga: <?php echo $_GET['msg']; ?></p></div>
  </body>
</html>

