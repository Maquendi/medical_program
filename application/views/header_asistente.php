<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title></title>

   
   
   <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.css")?>"/>
     <link rel='stylesheet' href='<?php echo base_url("assets/css/fullcalendar.css");?>' />
     <script src='<?php echo base_url("assets/js/jquery.min.js");?>'></script>
     <script src='<?php echo base_url("assets/js/moment.min.js");?>'></script>
     <script src='<?php echo base_url("assets/js/fullcalendar.js");?>'></script>
     <script src="<?php echo base_url("assets/js/bootstrap.js")?>"></script>
     
 <style>
   body{
    font-family: serif;
    font-style: italic;
   }
 </style>

 
 
 
 






</head>
<body>


<nav class="navbar navbar-dark bg-dark">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div>
    <a href="<?php echo base_url("index.php/Controlador/salir")?>" class="btn btn-outline-info my-2 my-sm-0" >Salir de cuenta</a>
  </div>



  <div class="collapse navbar-collapse" id="navbarText">
   
   <div class="row">
       
     <div class="col-sm-3">
       
     </div>


     <div class="col-sm-3">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url("index.php/Controlador/add_patient")?>"><h5>Nuevo Paciente</h5><span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#"><h5>Impresion reporte</h5></a>
        </li>
         <li class="nav-item">
           <a class="nav-link" href="#"><h5>Nueva cita</h5></a>
          </li>
      </ul>
   </div>
     <hr>
     
     <div class="col-sm-3">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
          <a class="nav-link" href="#">Agregar Paciente <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Imprimir Reporte</a>
        </li>
         <li class="nav-item">
           <a class="nav-link" href="#">Organizar Cita</a>
          </li>
    </ul>
   </div>
    <hr>

   <div class="col-sm-3">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
          <a class="nav-link" href="#">Agregar Paciente <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Imprimir Reporte</a>
        </li>
         <li class="nav-item">
           <a class="nav-link" href="#">Organizar Cita</a>
          </li>
    </ul>
   </div>

 </div>






    <hr>
  </div>

</nav>