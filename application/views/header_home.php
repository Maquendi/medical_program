<!DOCTYPE html>
<html>
<head>
 <title>HFM</title> <!--HOSPITAL FILE MANAGER -->
 <link rel="shortcut icon" href="<?php echo base_url("images/icons/favicon.png")?>" />
 <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/estilo/style.css")?>"/>

 <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.css")?>"/>
 <script src="<?php echo base_url("assets/js/jquery-3.3.1.js")?>"></script>
 <script src="<?php echo base_url("assets/js/bootstrap.js")?>"></script>
</head>



<body>


<nav class="navbar navbar-light bg-light">
 

  <hr>
  <div class="dropdown">

  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Elige Una Accion
  </button>
  <div class="dropdown-menu menu-right">
    <a class="dropdown-item" href="<?php echo base_url("index.php/Controlador/login");?>">Entrar a Cuenta</a>
    <a class="dropdown-item" href="#">Informacion</a>
    <a class="dropdown-item" href="#">Contactarnos</a>
  </div>
</div>

</nav>






<hr>
<div class="con">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url("images/images/image1.jpg")?>" height="428">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url("images/images/image2.jpg")?>" height="428">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url("images/images/image3.jpg")?>" height="428">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
<hr>