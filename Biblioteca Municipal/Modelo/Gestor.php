<?php 

	class Gestor {
		
		
		public function agregarArea(Area $area){
			$conexion = new Conexion();
			$conexion->abrir();
			$codigoarea = $area->obtenerCodigoarea();
			$nombrearea = $area->obtenerNombrearea();
			$sql = "INSERT INTO areas VALUES ('$codigoarea','$nombrearea')";
			$conexion->consulta($sql);
			$conexion->cerrar();
		}
		
		public function consultarAreaPorCodigo($areacod){
			$conexion = new Conexion();
			$conexion->abrir();
			$sql = "SELECT * FROM areas WHERE areCodigo='$areacod'";
			$conexion->consulta($sql);
			$result = $conexion->obtenerResult();
			$conexion->cerrar();
			return $result;
		}

		public function consultarAreaPorCodigo2($areacod){
			$conexion = new Conexion();
			$conexion->abrir();
			$sql = "SELECT * FROM areas WHERE areCodigo='$areacod'";
			$conexion->consulta($sql);
			$result = $conexion->obtenerResult();
			$conexion->cerrar();
			return $result;
		}

		public function editarAreaPorCodigo($areacod,$nombrearea){
			$conexion = new Conexion();
			$conexion->abrir();
			$sql = "UPDATE areas SET areCodigo=$areacod,areNombre='$nombrearea' WHERE areCodigo='$areacod'";
			$conexion->consulta($sql);
			$result = $conexion->obtenerResult();
			$conexion->cerrar();
			return $result;
		}
		public function eliminarAreaPorCodigo($areacod){
			$conexion = new Conexion();
			$conexion->abrir();
			$sql = "DELETE FROM areas WHERE areCodigo = '$areacod'";
			$conexion->consulta($sql);
			$result = $conexion->obtenerResult();
			$conexion->cerrar();
			return $result;
		}
		///Libros
		public function agregarLibro(Libro $libro){
			$conexion = new Conexion();
			$conexion->abrir();
			$codigolibro = $libro->obtenerCodigolib();
			$nombrelibro = $libro->obtenerNombrelib();
			$numpaglibro = $libro->obtenerNumpaglib();
			$autorlibro = $libro->obtenerAutorlib();
			$editoriallibro = $libro->obtenerEditorialib();
			$arealibro = $libro->obtenerArealib();
			$sql = "INSERT INTO libros VALUES ('$codigolibro','$nombrelibro','$numpaglibro','$autorlibro','$editoriallibro','$arealibro')";
			$conexion->consulta($sql);
			$conexion->cerrar();
		}
		public function consultarLibroPorCodigo($libcod){
			$conexion = new Conexion();
			$conexion->abrir();
			$sql = "SELECT * FROM libros WHERE libCodigo='$libcod'";
			$conexion->consulta($sql);
			$result = $conexion->obtenerResult();
			$conexion->cerrar();
			return $result;
		}
		public function consultarLibroPorCodigo2($uscod){
			$conexion = new Conexion();
			$conexion->abrir();
			$sql = "SELECT * FROM libros WHERE libCodigo='$uscod'";
			$conexion->consulta($sql);
			$result = $conexion->obtenerResult();
			$conexion->cerrar();
			return $result;
		}

		public function editarLibroPorCodigo($licod,$linom,$linum,$liaut,$liedi,$liare){
			$conexion = new Conexion();
			$conexion->abrir();
			$sql = "UPDATE libros SET libCodigo=$licod,libNombre='$linom',libNumPag=$linum,libAutor='$liaut',libEditorial='$liedi',libArea='$liare' WHERE libCodigo='$licod'";
			$conexion->consulta($sql);
			$result = $conexion->obtenerResult();
			$conexion->cerrar();
			return $result;
		}
		public function eliminarLibroPorCodigo($libcod){
			$conexion = new Conexion();
			$conexion->abrir();
			$sql = "DELETE FROM libros WHERE libCodigo = '$libcod'";
			$conexion->consulta($sql);
			$result = $conexion->obtenerResult();
			$conexion->cerrar();
			return $result;
		}

		///Usuario
		public function agregarUsuario(Usuario $usuario){
			$conexion = new Conexion();
			$conexion->abrir();
			$codigouser = $usuario->obtenerDocumentouser();
			$nombreuser = $usuario->obtenerNombreuser();
			$direccionuser = $usuario->obtenerDireccionuser();
			$telefonouser = $usuario->obtenerTelefonouser();
			$correouser = $usuario->obtenerCorreouser();
			$estadouser = $usuario->obtenerEstadouser();
			$sql = "INSERT INTO usuarios VALUES ('$codigouser','$nombreuser','$direccionuser','$telefonouser','$correouser','$estadouser')";
			$conexion->consulta($sql);
			$conexion->cerrar();
		}
		public function consultarUsuarioPorCodigo($uscod){
			$conexion = new Conexion();
			$conexion->abrir();
			$sql = "SELECT * FROM usuarios WHERE usuDocumento='$uscod'";
			$conexion->consulta($sql);
			$result = $conexion->obtenerResult();
			$conexion->cerrar();
			return $result;
		}
		public function consultarUsuarioPorCodigo2($uscod){
			$conexion = new Conexion();
			$conexion->abrir();
			$sql = "SELECT * FROM usuarios WHERE usuDocumento='$uscod'";
			$conexion->consulta($sql);
			$result = $conexion->obtenerResult();
			$conexion->cerrar();
			return $result;
		}

		public function editarUsuarioPorCodigo($uscod,$usnom,$usdire,$ustel,$uscorre,$usesta){
			$conexion = new Conexion();
			$conexion->abrir();
			$sql = "UPDATE usuarios SET usuDocumento=$uscod,usuNombre='$usnom',usuDireccion='$usdire',usuTelefono=$ustel,usuCorreo='$uscorre',usuestado='$usesta' WHERE usuDocumento='$uscod'";
			$conexion->consulta($sql);
			$result = $conexion->obtenerResult();
			$conexion->cerrar();
			return $result;
		}
		public function eliminarUsuarioPorCodigo($uscod){
			$conexion = new Conexion();
			$conexion->abrir();
			$sql = "DELETE FROM usuarios WHERE usuDocumento = '$uscod'";
			$conexion->consulta($sql);
			$result = $conexion->obtenerResult();
			$conexion->cerrar();
			return $result;
		}
  }