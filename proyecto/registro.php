<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>Registo Game-Check</title>
    <link href="css/estilo.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&family=Readex+Pro:wght@200&display=swap" rel="stylesheet">
</head>

  <body class="text-center" style="padding-top: 50px;">
  <div class="card mx-auto" style="width: 18rem;">
        
    <form class="form-registro" method="POST">
      <img src="img/psyduck.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Registrate</h1>
      <p>Que esperas para registrarte y conocer más sobre tus juegos favoritos!</p>

      <label for="nombre">Nombre</label>
      <br>
      <input type="nombre" name="nombre">
      <br><br>
      <label for="correo">Correo</label>
      <br>
      <input type="correo" name="correo">
      <br><br>
      <label for="contrasena">Contraseña</label>
      <input type="contrasena" name="contrasena">
      <br><br>
        <button class="btn btn-warning" type="submit" name="registro" value="Registrar">Registrar</button>
        <?PHP  
      include("class/registrar.php");
      ?>
      <br><br>
      <a href="login.php" class="text-info">Iniciar sesión</a>
    </form>
  </div>
  </body>
</html>
