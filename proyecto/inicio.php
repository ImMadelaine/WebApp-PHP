<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Página principal</title>
        
        <link href="css/estilo.css" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
        <!--FONTS-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&family=Readex+Pro:wght@200&display=swap" rel="stylesheet">
    </head>
    <body>
    

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
                    <a class="nav-link active" aria-current="page" href="#">Juegos</a>
                </li>
                
                <!-- Columna de logout-->
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="logout.php">Cerrar Sesión</a>
                </li>

            </ul>
      
    </div>
    </div>
    </nav>

    <!-- DIV DEL TEXTO DE LA PAGINA 
    <div class="texto"  style="padding-top: 10px";>
 </div>-->


    <!-- JUEGOS POPULARES -->
    <section class="fdb-block">
    <div class="container">
        <div class="row text-center mt-3">
                <h3>Los juegos más populares</h3>
        
    
        <div class="row text-center justify-content-center mt-3">
            <div class="col-10 col-sm-3"  style="width: 900px;">

                <div class="row text-center justify-content-center">
                    <div class="col-10 col-sm-3">
                        <a href="juego1.php">
                      <img alt="image" style= "height: 280px;" href="juego1.php" class="img-fluid rounded" src="img/1.jpg">
                        </a>
                      <h4><strong>Halo Infinite</strong></h4>
                    </div>

                    <div class="col-10 col-sm-3 pt-5 pt-sm-0">
                      <a href="juego2.php">
                    <img alt="image" class="img-fluid rounded"  href="juego2.php" src="img/hitman.jpg">
                      </a>
                    <h4><strong>Hitman 3</strong></h4>
                    </div>


                    <div class="col-10 col-sm-3 pt-5 pt-sm-0">
                      <a href="juego3.php">
                    <img alt="image" class="img-fluid rounded" href="juego3.php" src="img/3.jpg">
                     </a>
                    <h4><strong>Battlefield 2042</strong></h4>
                    </div>  

                     <div class="col-10 col-sm-3">
                      <a href="juego4.php">
                    <img alt="image" class="img-fluid rounded" href="juego4.php" src="img/lol2.jpg">
                      </a>
                    <h4><strong>League of Legends</strong></h4>
                    </div>  
                </div> 
            </div>
        </div>

        <hr class="featurette-divider mt-4" >
        <h3>Próximos lanzamientos</h3></div>

        <ul class="list-group list-group-horizontal justify-content-center  mt-5">
        <div class="card" style="width: 18rem;">
            <img src="img/payday.jpg" style= "height: 360px;"class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">PayDay 3</h5>
              <p class="card-text1">Multiplataforma</p>
              <a href="payday.php" class="btn btn-primary">Detalles</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="img/squad.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Suicide Squad: Kill the Justice League</h5>
              <p class="card-text1">Multiplataforma</p>
              <a href="game2.php" class="btn btn-primary">Detalles</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="img/dragon.jpg" style= "height: 360px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Dragon Ball: The Breakers</h5>
              <p class="card-text1">Multiplataforma</p>
              <a href="game3.php" class="btn btn-primary">Detalles</a>
            </div>
          </div>
        </ul>

        <!-- Segunda Fila de cartas -->
        <ul class="list-group list-group-horizontal justify-content-center  mt-5">
            <div class="card" style="width: 18rem;">
                <img src="img/aztech.jpg" style= "height: 360px;"class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Aztech Forgotten Gods</h5>
                  <p class="card-text1">Multiplataforma</p>
                  <a href="game4.php" class="btn btn-primary">Detalles</a>
                </div>
              </div>
    
              <div class="card" style="width: 18rem;">
                <img src="img/avowed.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Avowed</h5>
                  <p class="card-text1">Multiplataforma</p>
                  <a href="game5.php" class="btn btn-primary">Detalles</a>
                </div>
              </div>
    
              <div class="card" style="width: 18rem;">
                <img src="img/persia.jpg" style= "height: 360px;" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Prince of Persia: The Sands of Time</h5>
                  <p class="card-text1">Multiplataforma</p>
                  <a href="game6.php" class="btn btn-primary">Detalles</a>
                </div>
              </div>
            </ul>
    
            <!-- Tercer juego de cartas-->
            <ul class="list-group list-group-horizontal justify-content-center  mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="img/lies.jpg" style= "height: 360px;"class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Lies of P</h5>
                      <p class="card-text1">Multiplataforma</p>
                      <a href="game7.php" class="btn btn-primary">Detalles</a>
                    </div>
                  </div>

                  <div class="card" style="width: 18rem;">
                    <img src="img/sonic.jpg" style= "height: 360px;"class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Sonic 2022</h5>
                      <p class="card-text1">Multiplataforma</p>
                      <a href="game8.php" class="btn btn-primary">Detalles</a>
                    </div>
                  </div>

                  <div class="card" style="width: 18rem;">
                    <img src="img/ring.jpg" style= "height: 360px;"class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Elden Ring</h5>
                      <p class="card-text1">Multiplataforma</p>
                      <a href="game9.php" class="btn btn-primary">Detalles</a>
                    </div>
                  </div>
            </ul>
    </div>
</section>





</body>
</html>