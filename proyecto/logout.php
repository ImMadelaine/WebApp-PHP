<?php
// logout.php
session_start();
?>

<html>
<head>
<title>Desconectar</title>
<link href="css/estilo.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!--FONTS-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&family=Readex+Pro:wght@200&display=swap" rel="stylesheet">
</head>
<body class="text-center" style="padding-top: 50px;">

<?php
if (isset($_SESSION["usuario_valido"])){
    session_destroy();

    print('<div class="card mx-auto" style="width: 18rem;">');
    print('<img src="img/pikachu.png" alt="" width="72" height="72">');
    print('<h1 class="h3 mb-3 font-weight-normal">Sesión Finalizada</h1>');
    print('<h3>Te esperamos pronto</h3>');
    print('<p>[<a HREF="login.php">Conectar</a>]</p>');
    print('</div>');
    
}

?>
</body>
</html>

