<?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $numero3 = $_POST['numero3'];
    $numero4 = $_POST['numero4'];
   
    $suma = $numero1 + $numero2;
    $producto = $numero3 * $numero4;

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
<body>
<style>
  .resultado-suma {
    font-size: 24px;
    color: green;
  }

  .resultado-producto {
    font-size: 24px;
    color: blue;
  }
</style>
<div>
  <h2>Resultados:</h2>

  <p>Suma de los dos primeros números: <br> <span class="resultado-suma"><?php echo $suma; ?></span></p>
  <p>Producto del tercer y cuarto número: <br> <span class="resultado-producto"><?php echo $producto; ?></span></p>
</div>
    <button type="submit" class="btn btn-danger" onclick="location.href='index.php'" >REGRESAR AL INICIO</button>
</body>
</html>