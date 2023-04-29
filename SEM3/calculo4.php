<?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $numero3 = $_POST['numero3'];
    $promedio = ($numero1 + $numero2 +$numero3)/3;

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
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2 class="text-center mb-4">Resultados:</h2>

      <?php
      if($promedio>=13) {
          echo "<h1 class='text-center text-success'>Aprobado</h1>";
      }else{
          echo "<h1 class='text-center text-danger'>Desaprobado</h1>";
      }
      ?>
    </div>
  </div>
</div>


    <button type="submit" class="btn btn-danger" onclick="location.href='index.php'" >REGRESAR AL INICIO</button>
</body>
</html>