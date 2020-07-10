<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fixed CSS -->
    <link rel="stylesheet" href="css/fixed.css">
    <!-- Style-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
  <title>Intranet Árbitros</title>
  </head>


  <body data-spy="croll" data-target="navbarResponsive">
    <!-- EMPEZA HOME-->
    <div id="home">
        <!-- navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <a class="navbar-brand text-blue"  href="./">
                    <img src="images/logo.png" >           
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="./">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./salidas.php">Saidas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./resultados.php">Resultados</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./finish.php">Finish</a>
                        </li>
                    </ul>
                </div>
            </nav>
        <!-- fin de navbar -->
        <!-- Encabezado -->
        <div class="container-fluid finish d-flex flex-column justify-content-center align-items-center">
            <div class="text-center text">
                <h1 class="display-4">Fotos Finish</h1>
            </div>
        </div>
            <!-- fin de encabezado -->
            

            <div class="tz-gallery">
                <div class="row">
                     
                    <?php
                         $dir=opendir("finish");
                        while($archivo=readdir($dir))
                        { if($archivo == '.' || $archivo == '..'){} else{
                    ?>


                        <div class="col-12 col-sm-6 col-md-4 mb-3">
                            <div class="thumbnail card bg-dark text-white">
                                <a class="lightbox" href="finish/<?php echo $archivo;?>">
                                    <img class="card-img-top img-fluid" src="finish/<?php echo $archivo;?>">
                                    <div class="card-img-overlay">
                                        <h4 class="card-title"><?php echo $archivo;?></h4>
                                    </div>
                                </a>
                                <div class="card-footer">
                                    <small class="text-muted"><?php echo  date ("d-m-Y H:i:s.", filemtime("finish/$archivo")) ?></small>
                                </div>
                                
                            </div>
                        </div>

                       
                    <?php
                        }
                        }
                    ?>
                            
                    
                    
                </div>
            </div>

        </div>

        <div class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
            <div class="footer">
            <h5>Copyright © 2020 - Designed by <a class="text-white" href="https://www.linkedin.com/in/ivanferroherbon/">Iván Ferro</a></h5>
            </div>
        </div>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.tablesorter.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
        <script>
            baguetteBox.run('.tz-gallery');
        </script>

    </body>
</html>