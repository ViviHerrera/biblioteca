<?php
  class Area {
    private $areCodigo;
    private $areNombre;
    public function __construct($arecod,$arenomb) {
      $this->areCodigo = $arecod;
      $this->areNombre = $arenomb;
    }

    public function obtenerCodigoarea(){
			return $this->areCodigo;
		}

		public function obtenerNombrearea(){
			return $this->areNombre;
		}
  }
?>