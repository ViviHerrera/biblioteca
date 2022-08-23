<?php
  class Libro {
    private $liCodigo;
    private $liNombre;
    private $liNumpag;
    private $liAutor;
    private $liEditorial;
    private $liArea;

    public function __construct($liCodigo,$liNombre,$liNumpag,$liAutor,$liEditorial,$liArea) {
      $this->liCodigo = $liCodigo;
      $this->liNombre = $liNombre;
      $this->liNumpag = $liNumpag;
      $this->liAutor = $liAutor;
      $this->liEditorial = $liEditorial;
      $this->liArea = $liArea;
    }

    public function obtenerCodigolib(){
			return $this->liCodigo;
		}

		public function obtenerNombrelib(){
			return $this->liNombre;
		}

		public function obtenerNumpaglib(){
			return $this->liNumpag;
		}
    public function obtenerAutorlib(){
			return $this->liAutor;
		}

		public function obtenerEditorialib(){
			return $this->liEditorial;
		}

		public function obtenerArealib(){
			return $this->liArea;
		}
  }
?>