<!DOCTYPE html>
<html>
<head>
	<title></title>

     <link rel='stylesheet' href='<?php echo base_url("assets/css/fullcalendar.css");?>'/>
     <script src='<?php echo base_url("assets/js/jquery.min.js");?>'></script>
     <script src='<?php echo base_url("assets/js/moment.min.js");?>'></script>
     <script src='<?php echo base_url("assets/js/fullcalendar.js");?>'></script>
     <script src="<?php echo base_url("assets/js/bootstrap.js")?>"></script>
     <link rel="stylesheet" type="text/css" href='<?php echo base_url("assets/css/estilo.css");?>'/>
</head>

<?php 

  $yo = $this->session->userdata();

  $apellido = explode(" ", $yo['apellido']);

  $nombre = "Dr ".$yo['nombre']." ".$apellido[0];


?>




<body>

 <div class="row">
  
  <div class="col-sm-2" style="border:1px solid black;margin-left:0px;margin-top:0px; background-color:black; margin-right:0px; padding-top:20px;padding-left:40px;">
    <div class="foto">

     <img src="<?php echo $yo['foto_path']?>" height="150px" width="150px" 
    style="border-radius:6px;margin-bottom:0px;">
    </div>

    <div class="row" style="margin-top: 0px;" >
    <div class="col-md-12">
      <span style="color:green; font-size:18px; margin-top:0px;">
        <h6 style="font-style:italic;"><?php echo $nombre?></h6>  
      </span>
   </div>
   </div>
    
  </div>





  <div class="col-md-10" style="margin-left:0px;">
 <div class="nav">
  <ul>
    <li><a href="#">Home</a></li>

  	<li><a href="#">Consultas</a>

       <ul>
       	 <li><a href="#">Registrar Consultas</a></li>
       	 <li><a href="#">Organizar Cita</a></li>
       	 <li><a href="#">Ver tablero Citas</a></li>
       	 <li><a href="#">Estado Paciente</a></li>
       	
       </ul>
  	</li>

 

  	<li><a href="#">Calendarios</a>
       <ul>
       	 <li><a href="#">Visitas Futuras</a></li>
       	 <li><a href="#">Visitas Pasadas</li>
       	 <li><a href="#">Imprimir Calendario</a></li>
       	 <li><a href="#">Estado Paciente</a></li>
       	 <li><a href="#">Imprimir Reporte</a></li>
       </ul>
  	</li>

<!--
  	<li><a href="#">Consultas</a>
       <ul>
       	 <li><a href="#">Registrar Consultas</a></li>
       	 <li><a href="#">Organizar Cita</a></li>
       	 <li><a href="#">Ver tablero Citas</a></li>
       	 <li><a href="#">Estado Paciente</a></li>
       	 
       </ul>
  	</li>


  	<li><a href="#">Consultas</a>
       <ul>
       	 <li><a href="#">Registrar Consultas</a></li>
       	 <li><a href="#">Organizar Cita</a></li>
       	 <li><a href="#">Ver tablero Citas</a></li>
       	
       </ul>
  	</li>

  -->

    <li style="margin-left:18em"><a href="<?php echo base_url('index.php/Controlador/salir');?>" class="btn btn-outline-success btn-lg">Cerrar Cuenta</a>
      
    </li>
  </ul>
 </div>
</div>

<div class="row">
  <div class="col col-sm-12">
    <div class="image">
      
       

    </div>
  </div>
  </div>
</div>



