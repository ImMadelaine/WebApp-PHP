<?php
if (isset($_REQUEST['nombre']) && isset($_REQUEST['contrasena']))
{
    $nombre = $_REQUEST['nombre'];
    $contra = $_REQUEST['contrasena'];

    $salt = substr($nombre, 0, 2);
    $clave_crypt = crypt($contra, $salt);

    require_once("class/usuarios.php");

    $obj_usuarios = new usuarios();
    $usuario_valido = $obj_usuarios->validar_usuario($nombre,$clave_crypt);

    foreach($usuario_valido as $array_resp){
        foreach($array_resp as $value){
            $nfilas=$value;
        }
    }

    if ($nfilas > 0){
        $usuario_valido = $nombre;
        $_SESSION["usuario_valido"] = $usuario_valido;
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Iniciar Sesión Game-Check</title>
    <link href="css/estilo.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&family=Readex+Pro:wght@200&display=swap" rel="stylesheet">
</head>


    <body  class="text-center" style="padding-top: 50px;">

    <?php
    //sesion iniciada
    if(isset($_SESSION["usuario_valido"]))
    {
    ?>

    <p><a href="inicio.php">Go</a></p>
    
    <?php
    // cuando no inicia sesion
    }
    else{

print('<div class="card mx-auto" style="width: 18rem;">');

print('<form name="login-form" action="inicio.php" class="form-registro" method="POST">');
print('<img src="img/jigglypuff.png" alt="" width="72" height="72">');
print('<h1 class="h3 mb-3 font-weight-normal">Iniciar Sesión</h1>');
print('<p>Te estamos esperando !</p>');

print('<label for="nombre" >Nombre</label>');
print('<br>');
print('<input type="nombre" name="nombre">');
print('<br><br>');
print('<label for="contrasena">Contraseña</label>');
print('<input type="password" name="contrasena">');
print('<br><br>');
print('     <button class="btn btn-info" type="submit" name="submit" value="Registrar">Lets Go</button>');
print('</form>');
print('</div>');
    



    }
    ?>
    </body>
</html>