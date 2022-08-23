<?php 
	if ($result->num_rows > 0) {
?>

	<table border="1" style="width: 200%;border-collapse: collapse;">
		<tr>
			<th align="center">Cod. Libro </th>
			<th align="center">Nombre </th>
			<th align="center">Num. de paginas </th>
      <th align="center">Autor </th>
      <th align="center">Editorial </th>
      <th align="center">Area </th>
		</tr>

	<?php 

		while ($fila = $result->fetch_object()) {

	?>

		<tr>
			<td align="center"><?php echo $fila->libCodigo;?></td>
	
			<td align="center"><?php echo $fila->libNombre;?></td>
		
			<td align="center"><?php echo $fila->libNumPag;?></td>

      <td align="center"><?php echo $fila->libAutor;?></td>
	
      <td align="center"><?php echo $fila->libEditorial;?></td>

      <td align="center"><?php echo $fila->libArea;?></td>
		</tr>

	<?php 
	}
	?>
	</table>
	<?php
	}
	else{

	?>
	No se encontro ninguna libro con ese codigo
	<?php
	}
	?>	