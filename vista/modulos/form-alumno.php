<form role="form" class="form-horizon tal col-md-6" method="post" action="alumno.php">
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
			<input type="date" class="form-control" name="f_nacimiento">
		</div>
		<div class="form-group">
			<label class="control-label">Direccion:</label>
			<input type="text" class="form-control" name="direccion">
		</div>
		<div class="form-group">
			<label class="control-label">Legajo:</label>
			<input type="text" class="form-control" name="legajo">    
		</div>
		<div class="form-group">
			<input type="submit" class="form-control btn" value="Guardar">
		</div>    
    </fieldset>    
</form>
