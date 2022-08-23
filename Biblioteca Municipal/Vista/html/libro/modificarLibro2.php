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
    
    <div id="contenido2">
      <section>
        <article id="mcontenido2">
          <h2>Modificar libro</h2>
          <form id="mcontenido2form" action="index.php?accion=modificarlibro2" method="post" style="width: 52%;height: 208px;padding: 0 47px;">
            <table>
            <?php
              $id = $_POST['libomodi'];
              $sql = $conn->query("SELECT * FROM libros WHERE libCodigo = $id");
              while($datos = $sql->fetch_object()) { ?>
              <tr>
                <td><input type="hidden" id="codLibro" name="codLibro" pattern="[0-9]{0,1000}" value="<?=$datos->libCodigo ?>" required></td>
              </tr>
              <tr>
                <td>Nombre: </td>
                <td><input type="text" id="nomLibro" name="nomLibro" value="<?=$datos->libNombre ?>" required></td>
              </tr>
              <tr>
                <td>Num. de paginas: </td>
                <td><input type="text" id="numPag" name="numPagLibro" pattern="[0-9]{0,1000}" value="<?=$datos->libNumPag ?>" required></td>
              </tr>
              <tr>
                <td>Autor: </td>
                <td><input type="text" id="autorLibro" name="autorLibro" value="<?=$datos->libAutor ?>" required></td>
              </tr>
              <tr>
                <td>Editorial: </td>
                <td><input type="text" id="editorialLibro" name="editorialLibro" value="<?=$datos->libEditorial ?>" required></td>
              </tr>
              <?php }
                ?>
              <tr>
                <td>Areá: </td>
                <td><center><select id="areaLibro" name="areaLibro" class="form-control" style="max-width:77%;width: 200px;">
                  <?php   
                  $sql = "SELECT areCodigo,areNombre FROM areas ORDER BY areNombre";
                  $result = mysqli_query($conn,$sql);

                  while ($row = mysqli_fetch_array($result)) {   
                    $id = $row['areCodigo']; 
                    $comunas = $row['areNombre'];
                        
                    echo "<option value='$id'>$comunas</option>";
                  }
                  ?>
                </center></td>
              </tr>
              <tr>
                <td colspan="2"><center><input type="submit" name="ingresarLibroEnviar" value="Registrar" id="ingresarLibroEnviar" style="max-width:77%;width: 200px;"></center></td>
              </tr>
              
            </table>
          </form>
          <img src="Vista/img/11.png" alt="libreria" style="width: auto;height:75%;margin: -210px 117px;float:right;border-radius: 15px;">
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