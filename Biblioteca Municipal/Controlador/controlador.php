<?php

class Controlador {
  
  public function verPagina($ruta){
    require_once $ruta;
	}
	
///AREAS
	public function agregarArea($areacod,$areanomb){
		$area = new Area($areacod,$areanomb);
		$gestor = new Gestor();
		$id = $gestor->agregarArea($area);
		require_once "Vista/html/area/ingresarArea.php";
	}
	public function consultarArea($areacod){
		$gestor = new Gestor();
		$result = $gestor->consultarAreaPorCodigo($areacod);
		require_once "Vista/html/area/consultarAreaingresada.php";
	}
	public function consultarArea2($areacod){
		$gestor = new Gestor();
		$result = $gestor->consultarAreaPorCodigo2($areacod);
		require_once "Vista/html/area/modificarArea2.php";
	}
	public function consultarArea3($areacod,$areanomb){
		$gestor = new Gestor();
		$result = $gestor->editarAreaPorCodigo($areacod,$areanomb);
		require_once "Vista/html/area/modificarArea.php";
	}
	public function eliminarArea($areacod){
		$gestor = new Gestor();
		$result = $gestor->eliminarAreaPorCodigo($areacod);
		require_once "Vista/html/area/eliminarArea.php";
	}

	///LIBROS
	public function agregarLibro($libcod,$libnomb,$libnumpag,$libautor,$libeditorial,$libarea){
		$libro = new Libro($libcod,$libnomb,$libnumpag,$libautor,$libeditorial,$libarea);
		$gestor = new Gestor();
		$id = $gestor->agregarLibro($libro);
		require_once "Vista/html/libro/ingresarLibro.php";
	}
	public function consultarLibro($libcod){
		$gestor = new Gestor();
		$result = $gestor->consultarLibroPorCodigo($libcod);
		require_once "Vista/html/libro/consultarLibroingresado.php";
	}
	public function consultarLibro2($uscod){
		$gestor = new Gestor();
		$result = $gestor->consultarLibroPorCodigo2($uscod);
		require_once "Vista/html/libro/modificarLibro2.php";
	}
	public function consultarLibro3($libcod,$libnomb,$libnumpag,$libautor,$libeditorial,$libarea){
		$gestor = new Gestor();
		$result = $gestor->editarLibroPorCodigo($libcod,$libnomb,$libnumpag,$libautor,$libeditorial,$libarea);
		require_once "Vista/html/libro/modificarLibro.php";
	}
	public function eliminarLibro($libcod){
		$gestor = new Gestor();
		$result = $gestor->eliminarLibroPorCodigo($libcod);
		require_once "Vista/html/libro/eliminarLibro.php";
	}

	///Usuario
		public function agregarUsuario($uscod,$usnomb,$usdireccion,$ustelefono,$uscorreo,$usestado){
			$usuario = new Usuario($uscod,$usnomb,$usdireccion,$ustelefono,$uscorreo,$usestado);
			$gestor = new Gestor();
			$id = $gestor->agregarUsuario($usuario);
			require_once "Vista/html/usuario/ingresarUsuario.php";
		}
		public function consultarUsuario($uscod){
			$gestor = new Gestor();
			$result = $gestor->consultarUsuarioPorCodigo($uscod);
			require_once "Vista/html/usuario/consultarUsuarioingresado.php";
		}
		public function consultarUsuario2($uscod){
			$gestor = new Gestor();
			$result = $gestor->consultarUsuarioPorCodigo2($uscod);
			require_once "Vista/html/usuario/modificarUsuario2.php";
		}
		public function consultarUsuario3($uscod,$usnomb,$usdireccion,$ustelefono,$uscorreo,$usestado){
			$gestor = new Gestor();
			$result = $gestor->editarUsuarioPorCodigo($uscod,$usnomb,$usdireccion,$ustelefono,$uscorreo,$usestado);
			require_once "Vista/html/usuario/modificarUsuario.php";
		}
		public function eliminarUsuario($uscod){
			$gestor = new Gestor();
			$result = $gestor->eliminarUsuarioPorCodigo($uscod);
			require_once "Vista/html/usuario/eliminarusuario.php";
		}

}

?>