<?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $numero3 = $_POST['numero3'];
    echo "<h2>Resultados:</h2>";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
		h2 {
			color: blue;
		}
        h3 {
            color:green;
        }
		h2, h3 {
    text-align: center;
  }
	</style>
  </head>
<body>

<?php
if($numero1 > $numero2 && $numero1 > $numero3) {
    echo "<h3>El número mayor es: " . $numero1 . "</h3>";
} elseif($numero2 > $numero1 && $numero2 > $numero3) {
    echo "<h3>El número mayor es: " . $numero2 . "</h3>";
} elseif($numero3 > $numero1 && $numero3 > $numero2) {
    echo "<h3>El número mayor es: " . $numero3 . "</h3>";
} else {
    echo "<h3>Los números ingresados son iguales.</h3>";
}
?>
<button type="submit" class="btn btn-danger" onclick="location.href='index.php'" >REGRESAR AL INICIO</button>
</body>
</html>