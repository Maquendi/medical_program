<!DOCTYPE html>
<html>
<head>
	<title></title>


<link rel="shortcut icon" href="<?php echo base_url("images/icons/favicon.png")?>" />
 <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/estilo/style.css")?>"/>

<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.css")?>"/>
     <link rel='stylesheet' href='<?php echo base_url("assets/css/fullcalendar.css");?>' />
     <script src='<?php echo base_url("assets/js/jquery.min.js");?>'></script>
     <script src='<?php echo base_url("assets/js/moment.min.js");?>'></script>
     <script src='<?php echo base_url("assets/js/fullcalendar.js");?>'></script>
     <script src="<?php echo base_url("assets/js/bootstrap.js")?>"></script>

 

 </head>






<body>
	
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="<?php echo base_url("images/icons/icono.png")?>"/>
  <a class="navbar-brand" href="#" id="toggle-menu">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url("index.php/Controlador/entrar")?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Rendimiento Personal</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Administrar
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url("index.php/Controlador/modificar_usuario") ?>">Cuentas</a>
          <a class="dropdown-item" href="#">Archivos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Personal</a>
        </div>
      </li>
    </ul>

    
    <div class="row">
    <form class="form-inline my-2 my-lg-0">
      
      
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0"  type="button">Buscar</button>
       
      <div class="col-sm-2">
      <div  class="btn btn-outline-success my-2 my-sm-0">
        <a href="<?php echo base_url("index.php/Controlador/salir")?>" class="">Salir de cuenta</a>
      </div>
      </div>


    </form>
    </div>
     
      
   
   


  </div>
</nav>



<script type="text/javascript">
	


	$(document).ready(function(){

		$('#toggle-menu').click(function(e){
            
            e.preventDefault();
            $('#wrapper').toggleClass("menuDisplayed");
		});

	});




</script>