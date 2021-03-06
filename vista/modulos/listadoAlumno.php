<html>
	<?php include '../vista/header.php';?>
	<body>
		<?php include '../vista/menu.php';?>
		<div class="container">
			<div class="jumbotron">
                <div class="col-md-12">
                    <form action="../controlador/alumno.php" method="GET" class="form-inline col-md-10" role="form">
                        <fieldset>
                            <legend>Seleccione Carrera y Cursada:</legend>
                        <input type="hidden" name="action" value="listar">
                        <div class="form-group">
                            <label for="filtroCarrera">Carrera:</label>
                            <select name="filtroCarrera" id="filtroCarrera" class="form-control">
                                <?php 
                                foreach($carrera as $a):
                                    echo "<option value='$a'>$a</option>";
                                endforeach;
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="filtroCursada">Cursada:</label>
                            <select name="filtroCursada" id="filtroCursada" class="form-control">
                                <?php 
                                foreach($anios as $a):
                                    echo "<option value='$a'>$a</option>";
                                endforeach;
                                ?>
                            </select>
                        </div>    
                        <input type="submit" value="Listar" class=" btn">
                            </fieldset>    
                    </form>
                    <div class="col-md-2"></div>
                    <a href="?action=print&filtroCarrera=<?php echo $_GET['filtroCarrera']?>&filtroCursada=<?php echo $_GET['filtroCursada']?>" class="btn btn-primary glyphicon glyphicon-print">&nbsp;Imprimir</a>
                </div>
				<table class="table table-striped tablaData">
					<thead>
						<tr>
							<th>Apellido</th>
							<th>Nombre</th>
							<th>Documento</th>
							<th>Anio</th>
							<th>Carrera</th>
							<th>Comision</th>
						</tr>
					</thead>
					<tbody>
						<?php
                        if(count($as)>0){
                            foreach($as as $a):?>
						<tr>
							<td><?php echo $a['apellido']?></td>
							<td><?php echo $a['nombrealumno']?></td>
							<td><?php echo $a['documento']?></td>
							<td><?php echo $a['anio']?></td>
							<td><?php echo $a['carrera' ]?></td>
							<td><?php echo $a['comision']?></td>
						</tr>
						<?php endforeach;
                        }else{
                            echo '<tr>
							         <td></td><td></td><td></td><td></td><td></td><td></td>
						          </tr>';
                        }
                        ?>
					</tbody>
				</table>    
			</div>   
		</div>
	</body>
</html>
