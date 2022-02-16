<HTML LANG="es">
    <HEAD>
        <TITLE>Game-Check</TITLE>
        <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
        <!--FONTS-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&family=Readex+Pro:wght@200&display=swap" rel="stylesheet">

        <style>
            p {text-align: right;}
            h3 {text-align: right;}
        </style>

    </HEAD>
<BODY>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
            
        <a class="navbar-brand" href="#">
            <img src="img/gamecheck.png" alt="" width="30" height="30" class="d-inline-block align-text-top">    
            Game-Check
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Columna de Juegos-->
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="inicio.php">Juegos</a>
                </li>

        
                <!-- Columna de login-->
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="logout.php">Cerrar Sesión</a>
                </li>

            </ul>
  
    </div>
    </div>
    </nav>

<section class="fdb-block">
  <div class="container">
    <div class="row">
    <div class="col-12">
        <div class="row justify-content-center pb-5">
          <div class="col-12 col-lg-8 text-center">
            <h2 style="padding-top: 20px;">Juegos más populares</h2>
          </div>
        </div>
    </div>
    </div>

    
    <div class="row ">
      <div class="col-6">
        <img alt="image" style="height: 500px;" class="img-fluid"  src="img/sonic.jpg">
        </div>
        <div class="col-6">
       
        

<?PHP  
require_once("class/juegos.php");

$obj_juego = new juegos();
$juegos = $obj_juego->Listar_sonic();

$nfilas=count($juegos);

if($nfilas > 0){
    foreach ($juegos as $resultado){ 
        print("<br>");
        print("<h3>Nombre</h3>");
        print("<p>" . $resultado['nombre'] . "</p>\n");
        
        print("<h3>Descripción</h3>"); 
        print("<p>" . $resultado['descripcion'] . "</p>\n");
     
        print("<h3>Consola</h3>");
        print("<p>" . $resultado['consola'] . "</p>\n"); 
        
        print("<h3>Género</h3>");
        print("<p>" . $resultado['genero'] . "</p>\n"); 

        print("<h3>Desarrollador</h3>");
        print("<p>" . $resultado['desarrollador'] . "</p>\n"); 

        print("<h3>Fecha de Lanzamiento</h3>");
        print("<p>" . $resultado['fecha'] . "</p>\n"); 
    }
}
else{
    print("No hay noticias disponibles");
}
?>

 <!--row div del php -->
 </div>
  <!--row div general-->
</div>

  </div>
</section>

    


</BODY>
</HTML>