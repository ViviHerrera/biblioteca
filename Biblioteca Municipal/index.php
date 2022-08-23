<?php
require_once 'Controlador/Controlador.php';
require_once 'Modelo/Conexion.php';
require_once 'Modelo/Area.php';
require_once 'Modelo/Libro.php';
require_once 'Modelo/Usuario.php';
require_once 'Modelo/Gestor.php';

$controlador = new Controlador();

    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "db_biblioteca";

    $conn = new mysqli($hostName, $userName, $password, $databaseName);

if (isset($_GET['accion'])) {
  
///NAVEGACION BARRA INICIO

  ///area
  if ($_GET['accion']=="ingresarare") {
    $controlador->verPagina("Vista/html/area/ingresarArea.php");
  }
  elseif ($_GET['accion']=="consultarare") {
    $controlador->verPagina("Vista/html/area/consultarArea.php");
  }
  elseif ($_GET['accion']=="editarare") {
    $controlador->verPagina("Vista/html/area/modificarArea.php");
  }
  elseif ($_GET['accion']=="eliminarare") {
    $controlador->verPagina("Vista/html/area/eliminarArea.php");
  }
  
  ///libros
  elseif ($_GET['accion']=="ingresarlib") {
    $controlador->verPagina("Vista/html/libro/ingresarLibro.php");
  }
  elseif ($_GET['accion']=="consultarlib") {
    $controlador->verPagina("Vista/html/libro/consultarLibro.php");
  }
  elseif ($_GET['accion']=="editarlib") {
    $controlador->verPagina("Vista/html/libro/modificarLibro.php");
  }
  elseif ($_GET['accion']=="eliminarlib") {
    $controlador->verPagina("Vista/html/libro/eliminarLibro.php");
  }
  //prestamos
  elseif ($_GET['accion']=="reapresta") {
    $controlador->verPagina("Vista/html/prestamo/realizarPrestamo.php");
  }
  elseif ($_GET['accion']=="readevolu") {
    $controlador->verPagina("Vista/html/prestamo/realizarDevolucion.php");
  }
  
  ///Sanciones
  elseif ($_GET['accion']=="sanciones") {
    $controlador->verPagina("Vista/html/sanciones/sanciones.php");
  }

  //Usuario
  elseif ($_GET['accion']=="ingresaruser") {
    $controlador->verPagina("Vista/html/usuario/ingresarUsuario.php");
  }
  elseif ($_GET['accion']=="consultaruser") {
    $controlador->verPagina("Vista/html/usuario/consultarUsuario.php");
  }
  elseif ($_GET['accion']=="editaruser") {
    $controlador->verPagina("Vista/html/usuario/modificarUsuario.php");
  }
  elseif ($_GET['accion']=="eliminaruser") {
    $controlador->verPagina("Vista/html/usuario/eliminarUsuario.php");
  }
///NAVEGACION BARRA FINAL

///CRUD AREA START

  //ADD AREA START
    elseif ($_GET['accion']=="guardarArea") {
      $id = $_POST['codArea'];
      $result = $conn->query("SELECT areCodigo FROM areas WHERE areCodigo = $id");
      if($result->num_rows == 0) {
          // row not found, do stuff...
          $controlador->agregarArea($_POST['codArea'],ucwords($_POST['nomArea']));
          echo '<script>alert("Área registrado con exito")</script>';
      }else {
        // do other stuff...
        require_once "Vista/html/area/ingresarArea.php";
        echo '<script>alert("Ya se encuentra un área asociada a este codigo")</script>';
      }
    }
  //ADD AREA END

  //CONSULT AREA START
    elseif ($_GET['accion']=="consultararea") {
      $controlador->consultarArea($_GET['consultarCodigo']);
    }
  //CONSULT AREA END

  //EDIT AREA START
    elseif ($_GET['accion']=="modificarArea") {
      $id = $_POST['modiarea'];
      $result = $conn->query("SELECT areCodigo FROM areas WHERE areCodigo = $id ");
      if($result->num_rows == 0) {
          // row not found, do stuff...
          require_once "Vista/html/area/modificarArea.php";
          echo '<script>alert("No se encontro ningun área asociada a este codigo")</script>';
          
      } else {
          // do other stuff...
          $controlador->consultarArea2($_POST['modiarea']);
      }
    }
    elseif ($_GET['accion']=="modificarArea2") {
      $controlador->consultarArea3($_POST['codArea'],ucwords($_POST['nomArea']));
      echo '<script>alert("Modificacion realizada con exito")</script>';
    }
  //EDIT AREA END

  //DELETE AREA START
    elseif ($_GET['accion']=="eliminarArea") {
      $controlador->eliminarArea($_POST['eliareacod']);
      echo '<script>alert("Eliminado con exito")</script>';
    }
  //DELETE AREA END

///CRUD AREA END

///CRUD LIBRO INICIO

  //ADD LIBRO START
    elseif ($_GET['accion']=="guardarLibro") {
      $id = $_POST['codLibro'];
      $result = $conn->query("SELECT libCodigo FROM libros WHERE libcodigo = $id");
      if($result->num_rows == 0) {
        $controlador->agregarLibro($_POST['codLibro'],ucwords($_POST['nomLibro']),$_POST['numPagLibro'],ucwords($_POST['autorLibro']),ucwords($_POST['editorialLibro']),$_POST['areaLibro']);
        echo '<script>alert("Libro registrado con exito")</script>';
      }else {
        require_once "Vista/html/libro/ingresarLibro.php";
        echo '<script>alert("Ya se encuentra un libro asociada a este codigo")</script>';
      }
    }
  //ADD LIBRO END

  //CONSULT LIBRO START
    elseif ($_GET['accion']=="consultarlibro") {
      $controlador->consultarLibro($_GET['codigolibro']);
    }
  //CONSULT LIBRO END

  //EDIT LIBRO START
    elseif ($_GET['accion']=="modificarlibro") {
      $id = $_POST['libomodi'];
      $result = $conn->query("SELECT libCodigo FROM libros WHERE libCodigo = $id ");
      if($result->num_rows == 0) {
          // row not found, do stuff...
          require_once "Vista/html/libro/modificarLibro.php";
          echo '<script>alert("No se encontro ningun libro asociado a este codigo")</script>';
          
      } else {
          // do other stuff...
          $controlador->consultarLibro2($_POST['libomodi']);
      }
    }
    elseif ($_GET['accion']=="modificarlibro2") {
      $controlador->consultarLibro3($_POST['codLibro'],ucwords($_POST['nomLibro']),$_POST['numPagLibro'],ucwords($_POST['autorLibro']),ucwords($_POST['editorialLibro']),$_POST['areaLibro']);
      echo '<script>alert("Modificacion realizada con exito")</script>';
    }
  //EDIT LIBRO END

  //DELETE BOOK START
    elseif ($_GET['accion']=="eliminarLibro") {
        $controlador->eliminarLibro($_POST['elilicod']);
        echo '<script>alert("Eliminado con exito")</script>';
    }
  //DELETE BOOK END

///CRUD LIBRO FINAL

///PRESTAMOS START
///PRESTAMOS END

///CRUD USUARIO START

  //ADD USUARIO START
  elseif ($_GET['accion']=="guardarUser") {
    $id = $_POST['codUser'];
    $result = $conn->query("SELECT usuDocumento FROM usuarios WHERE usuDocumento = $id");
    if($result->num_rows == 0) {
      $controlador->agregarUsuario($_POST['codUser'],ucwords($_POST['nomUser']),$_POST['direUser'],$_POST['teleUser'],$_POST['correUser'],$_POST['estaUser']);
      echo '<script>alert("Usuario registrado con exito")</script>';
    }else {
      require_once "Vista/html/usuario/ingresarUsuario.php";
      echo '<script>alert("Ya se encuentra un documento asociado a este codigo")</script>';
    }
  }
  //ADD USUARIO END

  //CONSULT USUARIO START
    elseif ($_GET['accion']=="consultarusuario") {
      $controlador->consultarUsuario($_GET['codigousuario']);
    }
  //CONSULT USUARIO END

  //EDIT USUARIO START
    elseif ($_GET['accion']=="modificarUsuario") {
      $id = $_POST['usumodi'];
      $result = $conn->query("SELECT usuDocumento FROM usuarios WHERE usuDocumento = $id ");
      if($result->num_rows == 0) {
          // row not found, do stuff...
          require_once "Vista/html/usuario/modificarUsuario.php";
          echo '<script>alert("No se encontro ningun documento asociado a este codigo")</script>';
          
      } else {
          // do other stuff...
          $controlador->consultarUsuario2($_POST['usumodi']);
      }
    }
    elseif ($_GET['accion']=="modificarUsuario2") {
      $controlador->consultarUsuario3($_POST['codUser'],ucwords($_POST['nomUser']),$_POST['direUser'],$_POST['teleUser'],$_POST['correUser'],$_POST['estaUser']);
      echo '<script>alert("Modificacion realizada con exito")</script>';
    }
  //EDIT USUARIO END

  //DELETE USUARIO START
    elseif ($_GET['accion']=="eliminarUsuario") {
      $controlador->eliminarUsuario($_POST['eliausucod']);
      echo '<script>alert("Eliminado con exito")</script>';
    }
  //DELETE USUARIO END

///CRUD LIBRO FINAL

}
else{
  $controlador->verPagina("Vista/html/inicio.html");
}
?>