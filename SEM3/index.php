<?php
    $mensaje ="Ejercicios laboratorio03 - Alvaro Cuba"
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
<body>

<?php
 echo "<div  class='col-auto p-5 text-center'>
 <p class='fs-1'>Bienvenido:  "."<br>".$mensaje ."
 </p>
 </div>";
?>

<div class="d-grid gap-2 col-6 mx-auto" >
  <button type="submit" class="btn btn-primary" onclick="location.href='ejercicio1.php'" >Ejercicio1</button>
  <button type="submit" class="btn btn-primary" onclick="location.href='ejercicio2.html'" >Ejercicio2</button>
  <button type="submit" class="btn btn-primary" onclick="location.href='ejercicio3.html'" >Ejercicio3</button>
  <button type="submit" class="btn btn-primary" onclick="location.href='ejercicio4.html'" >Ejercicio4</button>
  <button type="submit" class="btn btn-primary" onclick="location.href='ejercicio5.html'" >Ejercicio5</button>
</div>
</body>
</html>