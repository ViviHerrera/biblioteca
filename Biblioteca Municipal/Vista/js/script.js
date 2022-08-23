function consultarArea(){
	url = "index.php?accion=consultararea&consultarCodigo=" + $("#consultarCodigo").val();
	$("#paciente2").load(url);
}
function consultarUsuario(){
	url = "index.php?accion=consultarusuario&codigousuario=" + $("#codigousuario").val();
	$("#paciente5").load(url);
}

function consultarLibro(){
	url = "index.php?accion=consultarlibro&codigolibro=" + $("#codigolibro").val();
	$("#paciente3").load(url);
}