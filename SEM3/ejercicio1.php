<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
<body>
<div class="col-auto p-5 ">
    <form id="FormLogin" action="mostrardatos.php" method="post">
        <div class="mb-3">
            <label  class="form-label">Usuario</label>
            <input type="text" class="form-control" id="usuario" name="usuario"  required>
        </div>
        <div class="mb-3">
            <label  class="form-label" >Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary" >RECIBIR DATOS</button>
        </form>

</div>
<button type="submit" class="btn btn-danger" onclick="location.href='index.php'" >REGRESAR AL INICIO</button>
</body>
</html>