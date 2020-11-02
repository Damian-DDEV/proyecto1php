<?php
require_once 'clases/Usuario.php';
require_once 'App/buscar.php';
session_start();
if (isset($_SESSION['usuario'])) {
    $usuario = unserialize($_SESSION['usuario']);
    $nomApe = $usuario->getNombreApellido();
}
else {
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>SuperAPP</title>
        <link rel="stylesheet" href="css/style.css">

    </head>
      <div class="jumbotron text-center">
      <h1>SuperAPP</h1>
      </div>    
      <div class="text-center">
        <h3>Bienvenido <?=$nomApe?></h3>
        <body class="container">
    <div class="form-1-2">
        <label for="caja_busqueda">Buscar:</label>
        <input type="text" name="caja_busqueda" id="caja_busqueda"></input>
        <div id="datos">
        </div>
        </div>
        <p><a href="logout.php">Cerrar sesión</a></p>
      </div>
    </body>
    <script src="js/jquery.min.js"></script>
</html>

