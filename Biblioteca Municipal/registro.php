<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="Vista/css/login.css"/>
    <link rel="stylesheet" type="text/css" href="Vista/css/cabecera.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
   <form action="validar.php" method="post">
   <h1 class="animate__animated animate__backInLeft">Sistema de registro</h1>
   <p>Usuario <input type="text" placeholder="ingrese su nombre" name="usuario"></p>
   <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>
   <p><a href="login.php" style="color:aliceblue">Atras</p>
   <input type="submit" value="registar">
    </form> 
</body>
</html>