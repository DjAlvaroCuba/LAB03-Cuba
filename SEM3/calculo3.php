<?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
		h1 {
			color: blue;
		}
		p {
			font-size: 20px;
			font-weight: bold;
			margin-bottom: 10px;
		}
	</style>
  </head>
<body>

<?php

	if($numero1 > $numero2) {
		$suma = $numero1 + $numero2;
		$diferencia = $numero1 - $numero2;
		echo "<h1>Resultado:</h1>";
		echo "<p>Suma: " . $suma . "</p>";
		echo "<p>Diferencia: " . $diferencia . "</p>";
	} else {
		if($numero1 < $numero2) {
			$producto = $numero1 * $numero2;
			$division = $numero1 / $numero2;
			echo "<h1>Resultado:</h1>";
			echo "<p>Producto: " . $producto . "</p>";
			echo "<p>División: " . $division . "</p>";
		} else {
			if($numero1 == $numero2) {
				echo "<h1>Resultado:</h1>";
				echo "<p>Los números son iguales.</p>";
			} else {
				echo "<h1>Error:</h1>";
				echo "<p>El segundo número no puede ser cero.</p>";
			}
		}
	}
	
?>
    <button type="submit" class="btn btn-danger" onclick="location.href='index.php'" >REGRESAR AL INICIO</button>
</body>
</html>