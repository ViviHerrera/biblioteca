<?php
  class Usuario {
    private $usDocumeto;
    private $usNombre;
    private $usDireccion;
    private $usTelefono;
    private $usCorreo;
    private $usEstado;

    public function __construct($usDocumeto,$usNombre,$usDireccion,$usTelefono,$usCorreo,$usEstado) {
      $this->usDocumento = $usDocumeto;
      $this->usNombre = $usNombre;
      $this->usDireccion = $usDireccion;
      $this->usTelefono = $usTelefono;
      $this->usCorreo = $usCorreo;
      $this->usEstado = $usEstado;
    }

    public function obtenerDocumentouser(){
			return $this->usDocumento;
		}

		public function obtenerNombreuser(){
			return $this->usNombre;
		}

		public function obtenerDireccionuser(){
			return $this->usDireccion;
		}
    public function obtenerTelefonouser(){
			return $this->usTelefono;
		}

		public function obtenerCorreouser(){
			return $this->usCorreo;
		}

		public function obtenerEstadouser(){
			return $this->usEstado;
		}
  }
?>