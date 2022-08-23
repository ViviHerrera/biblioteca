<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "db_biblioteca";

$conn = new mysqli($hostName, $userName, $password, $databaseName);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="Vista/css/style2.css"/>
  <title>Biblioteca Municipal</title>
</head>
<body>
  <div id="contenedor">
    <header>
      <div id="encabezado">
      </div>
    </header>
    
    <nav>
      <ul id="nav">
        <li class="activa"><a href="index.php">Inicio</a></li>
        <li><a>Área
          <i class="fa fa-caret-down"></i>
        </a>
        <ul>
          <li><a href="index.php?accion=ingresarare">Ingresar nuevo</a></li>
          <li><a href="index.php?accion=consultarare">Consultar</a></li>
          <li><a href="index.php?accion=editarare">Modificar</a></li>
          <li><a href="index.php?accion=eliminarare">Eliminar</a></li>
        </ul>
        </li>

        <li><a>Libros
          <i class="fa fa-caret-down"></i>
        </a>
        <ul>
          <li><a href="index.php?accion=ingresarlib">Ingresar nueva</a></li>
          <li><a href="index.php?accion=consultarlib">Consultar</a></li>
          <li><a href="index.php?accion=editarlib">Modificar</a></li>
          <li><a href="index.php?accion=eliminarlib">Eliminar</a></li>
        </ul>
        </li>

        <li><a>Prestamos
          <i class="fa fa-caret-down"></i>
        </a>
        <ul>
          <li><a href="index.php?accion=reapresta">Realizar préstamo</a></li>
          <li><a href="index.php?accion=readevolu">Realizar devolución</a></li>
        </ul>
        </li>

        <li><a href="index.php?accion=sanciones">Sanciones</a></li>
          
        <li><a>usuarios
          <i class="fa fa-caret-down"></i>
        </a>
        <ul>
          <li><a href="index.php?accion=ingresaruser">Ingresar nuevo</a></li>
          <li><a href="index.php?accion=consultaruser">Consultar</a></li>
          <li><a href="index.php?accion=editaruser">Modificar</a></li>
          <li><a href="index.php?accion=eliminaruser">Eliminar</a></li>
        </ul>
        </li>
      </ul>
    </nav>

    <div id="contenido2" style="height: 330px;">
      <section>
        <article id="mcontenido2">
          <h2>Realizar Prestamo</h2>
          <form id="mcontenido2form" action="index.php?accion=consulsanciones" method="post" style="width:100%;">
            <table border="1">
              <tr>
                <td>Fecha: </td>
                <td><input type="date" id="codLibro" name="codLibro" required></td>
              </tr>
              <tr>
                <td>ID Usuario: </td>
                <td><input type="text" id="nomLibro" name="nomLibro" pattern="[0-9]{0,1000}" required></td>
              </tr>
              <tr>
                <td>ID prestamo: </td>
                <td><input type="text" id="nomLibro" name="nomLibro" pattern="[0-9]{0,1000}" required></td>
              </tr>
              <tr>
                <td>Libro: </td>
                <!-- <td><input type="text" id="areaLibro" name="areaLibro" pattern="[0-9]{0,100}" required></td> -->
                <td><center><select id="areaLibro" name="areaLibro" class="form-control" style="max-width:77%;width: 200px;">
                  <?php   
                  
                  $sql = "SELECT libCodigo,libNombre FROM libros";
                  $result = mysqli_query($conn,$sql);

                  while ($row = mysqli_fetch_array($result)) {   
                    $id = $row['libCodigo']; 
                    $comunas = $row['libNombre'];
                        
                    echo "<option value='$id'>$comunas</option>";
                  }
                  ?>
                </center></td>
              </tr>
              <tr>
                <td>Cantidad: </td>
                <td><input type="text" id="numPag" name="numPagLibro" pattern="[0-9]{0,100}" required></td>
              </tr>
              <tr>
                <td>Fecha limite de entrega: </td>
                <td><input type="date" id="editorialLibro" name="editorialLibro" required></td>
              </tr>
              <tr>
                <td colspan="2"><center><input type="submit" name="ingresarLibroEnviar" value="Registrar" id="ingresarLibroEnviar"></center></td>
              </tr>
            </table>
          </form>
        </article>
      </section>
    </div>
    <footer class="site-footer">
      <div class="container">
        
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved</p>
            <a href="mapa.php">Mapa del sitio</a>.


          </div>
        </div>
      </div>
</footer>
  </div>
</body>
</html>