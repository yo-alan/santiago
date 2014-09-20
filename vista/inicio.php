<?php
$contenido='';
if(isset($_GET['page'])){
    switch($_GET['page']){
        case 'alumno': $contenido='modulos/alumno.php';
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sistema de Asistencia para Bedelia</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Gestion de Asistencia</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Inicio</a></li>
            </ul>
            <ul class="nav navbar-nav">
              <li class="active"><a href="?page=alumno">Alumnos</a></li>
            </ul>
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Cursada</a></li>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


    <div class="container">
        <?php if($contenido == ''){?>
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Navbar example</h1>
      </div>
        <?php }else{
            include $contenido;
        }?>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>