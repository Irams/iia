<!doctype html>
<html lang="es">

<head>
    <title>IIAs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono&family=Montserrat+Alternates:wght@300&family=Poppins:wght@400;900&display=swap" rel="stylesheet">
    

</head>
<body>
<!-- Navigation -->
<nav class="barra navbar navbar-expand-lg navbar-dark fixed-top">
  <a class="navbar-brand" href="index.php">
    <img src="images/logo.svg" width="45" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav text-center uppercase" id="barra-navegacion">
      
      <!-- <li class="nav-item active">
        <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"   aria-haspopup="true" aria-expanded="false">Servicios</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Construcción</a>
          <a class="dropdown-item" href="#">Mantenimiento</a>
          <a class="dropdown-item" href="#">VPAS</a>          
          <a class="dropdown-item" href="#">Redes</a>          
        </div>
      </li> -->

      <li class="nav-item">
        <a class="nav-link" href="#">Nosotros</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Contacto</a>
      </li>

    </ul>
  </div>
</nav>

<?php 
 $archivo = basename($_SERVER['PHP_SELF']);
 $pagina = str_replace(".php", "", $archivo);
 switch( $pagina ){
     case index: ?>
         <!-- Full Page Image Header with Vertically Centered Content -->
          <header class="masthead">
            <div class="container h-100">
              <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                  <a href="index.php"><img class="img-fluid logo" src="images/logo.svg" alt="logo"></a>
                  <div class="fondo-titulo uppercase">
                      <h1 class="font-weight-bold text-white">Ingeniería Integral</h1>
                      <p class="font-weight-bold text-white lead">Asociados</p>
                  </div>        
                </div>
              </div>
            </div>
          </header>
     <?php break;
     case construccion: ?>
         <img src="images/hero2.jpg" class="img-fluid hero-pags" alt="Responsive image">
     <?php break;
 } 
?>

