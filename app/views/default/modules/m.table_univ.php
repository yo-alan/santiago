<div class="t"><?php echo $titulo; ?></div>		
    <table border="0" cellspacing="3" cellpadding="0" class="tabla" width="100%">
		 <tr>
	    	<th>DNI</th>
	    	<th>Nombre</th>
	    	<th>Ap. Paterno </th>
	    	<th>Ap. Materno  </th>
		    <th>Carrera</th>
		  </tr>
	   <?php foreach ($tsArray as $data): ?>		
	   <tr>
	       <td><?php echo $data['cedula'];?></td>
		    <td><?php echo $data['nombre'];?></td>
		    <td><?php echo $data['paterno'];?></td>
	       <td><?php echo $data['materno'];?></td>
	       <td><?php echo $data['carrera'];?></td>
	   </tr>
	   <?php endforeach; ?>
	</table>		   