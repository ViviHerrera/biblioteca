<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="Vista/css/style2.css"/>
  <link rel="stylesheet" type="text/css" href="Vista/jquery/jquery-ui.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="Vista/jquery/jquery-1.11.3.min.js"></script>
	<script src="Vista/jquery/jquery-ui.js"></script>
  <script type="text/javascript" src="Vista/js/script.js"></script>
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
          <h2>Consultar Libro</h2>
          <form action="index.php?accion=consultarlibro" method="post" id="mcontenido2form" onkeydown="return event.key != 'Enter';">
            <table>
              <tr>
                <td>Cod. Área: </td>
                <td><input type="text" name="codigolibro" id="codigolibro"></td>
              </tr>
              <tr>
                <td></td>
                <td colspan="2">
                  <input type="button" value="Consultar" onclick="consultarLibro()">
                </td>
              </tr>
              <tr><td colspan="2"><div id="paciente3"></div></td></tr>
            </table>
          </form>
          <img src="Vista/img/consultar.png" alt="libreria" style="border-radius: -10;width: 42%;height: 80%;margin: -218px 13px;float: right;border-radius: 15px;">
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