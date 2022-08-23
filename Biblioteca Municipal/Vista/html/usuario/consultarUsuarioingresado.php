<?php 
	if ($result->num_rows > 0) {
?>
	<table border="1" style="width: 125%;border-collapse: collapse;">
		<tr>
			<th align="center">Documento </th>
			<th align="center">Nombre </th>
			<th align="center">Direccion</th>
			<th align="center">Telefono </th>
			<th align="center">Correo </th>
			<th align="center">Estado</th>
		</tr>
	<?php 
		while ($fila = $result->fetch_object()) {
	?>

		<tr>
			<td align="center"><?php echo $fila->usuDocumento;?></td>
	
			<td align="center"><?php echo $fila->usuNombre;?></td>
		
			<td align="center"><?php echo $fila->usuDireccion;?></td>

			<td align="center"><?php echo $fila->usuTelefono;?></td>
	
			<td align="center"><?php echo $fila->usuCorreo;?></td>

			<td align="center"><?php echo $fila->usuestado;?></td>
		</tr>
	<?php 
	}
	?>
	</table>
	<?php
	}
	else{
	?>
	No se encontro ninguna usuario registrado con ese documento
	<?php
	}
	?>	