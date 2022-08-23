<?php 
	if ($result->num_rows > 0) {
?>

	<table border="1" style="width: 120%;border-collapse: collapse;">
		<tr>
			<th align="center">Cod. Area </th>
			<th align="center">Nombre </th>
		</tr>

	<?php 

		while ($fila = $result->fetch_object()) {

	?>

		<tr>
			<td align="center"><?php echo $fila->areCodigo;?></td>
	
			<td align="center"><?php echo $fila->areNombre;?></td>
		</tr>

	<?php 
	}
	?>
	</table>
	<?php
	}
	else{

	?>
	No se encontro ninguna área con ese codigo
	<?php
	}
	?>	