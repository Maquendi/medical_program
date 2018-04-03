


<br>
<h3 style="color: green; font-style: italic;">Calendario De Citas Pendientes</h3>
<hr>
<div class="row">

	<div class="col-sm-5" style="margin-left: 5px;">
      
      <div id="calendario">
      	
      </div>
   

		<!--aqui va calendario de citas -->
	</div>






   <div class="col-sm-1"></div>


	
<!--aqui va detalle de citas.*************************** -->

<div class="col-sm-5">

  	<div class="jumbotron" style="padding:3px;">
      <nav aria-label="breadcrumb">
       <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"><h4 style="color:green;"><a href="#">Imprimir cita</a></h4>
         <small style="color:green"><?php echo $this->session->flashdata('registro_cita');?></small>
        </li>
       </ol>
     </nav>


     
     <hr>
     <div class="row">
     	<div class="col-sm-10">
          
       <input type="text" class="form-control" id="cedula" placeholder="buscar Con la Cedula.." data-toggle="tooltip" data-placement="top" title="Buscar Pacientes Con La cedula">

       </div>
       <button class="btn btn-outline-success my-2 my-sm-0" id="btn_buscar" type="button">Buscar</button>

       <div style="display: none">
         <button type="button" data-toggle="collapse" data-target="#colapsa_form" aria-expanded="true" aria-controls="colapsa_form" id="btnColapse">
         collapsa
       </button>
       </div>



     </div>

  	</div><!-- jumbotron-->

          






      <!-- model esta aqui -->

          <div class="modal fade bd-example-modal-lg" tabindex="2" role="dialog" style="margin:auto; margin-top:4%; padding-right:2px; width:40%;">
           <div class="modal-dialog modal-lg">
           <div class="modal-content">
            <div class="alert alert-info" role="alert" id="div_mensaje" style="margin-bottom:20px; padding-right:5px;">
                      
            </div>
     


   
    <div class="col-sm-5">
    <a id="a_registrar" class="form-control btn-outline-success" 
     data-dismiss="modal" href="#" style="display:none;">registrar</a>
    </div>
    

             </div>
           </div>

         </div>
      
      <div style="display:none">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" id="btn_modal"></button>
      </div>
           <!-- model esta aqui -->







        <form method="post" action="<?php echo base_url("index.php/Controlador/guardar_cita")?>">

          <div class="input-group mb-3">
            <div class="input-group-prepend">
             <span class="input-group-text">fecha Inicio</span>
             </div>
              <input type="text" class="form-control" name="" id="fecha">
           </div>
           
                        
             <!-- Esta input text me me informa sobre el estado de una peticion-->
              <input type="hidden" name="info" id="info">


            <div class="input-group mb-3">
              <div class="input-group-prepend">
             <span class="input-group-text">Hora final</span>
             </div>
              <input type="text" class="form-control" id="hora_final">
             
           </div>

           <div>
             <span style="color: red"><?php echo form_error('hora_final');?></span>
           </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
             <span class="input-group-text">Cedula</span>
             </div>
              <input type="text" class="form-control" name="cedula" id="c_cedula">
            </div>

             <div>
             <span style="color: red"><?php echo form_error('cedula');?></span>
           </div>


            <div class="row">
            

           <div class="input-group sm-5">

            <div class="col-sm-3">
            </div>
             <textarea style="border-top-color: white; border-right-style: none; border-left-style: none;" class="form-control" rows="2" name="comentario" placeholder="Algun comentario acerca de la cita..." id="comentario"></textarea>
           </div>
           </div>
   
        <hr>


   <!--********************colapsa*********************************-->
        <div class="**collapse**" id="**colapsa_form**">
         
        <div class="card card-body">

       <div class="row">
         <div class="col-sm-5">
           <label>Nombre</label>
           <input readonly="readonly" id="nombre" type="text" name="nombre" placeholder="nombre paciente" class="form-control">
           <h6 style="color: red"><?php echo form_error("nombre");?></h6>
         </div>

          <div class="col-sm-7">
           <label>Apellido</label>
           <input readonly="readonly" id="apellido" type="text" name="apellido" placeholder="apellido" class="form-control">
           <h6 style="color: red"><?php echo form_error("apellido");?></h6>
         </div>
       </div>

        <br>
       <div class="row">
         <div class="col-sm-5">
           <label>Fecha de Nacimiento</label>
           <input readonly="readonly" id="fecha_nac" type="date" name="fecha_nac" placeholder="fecha Nacimiento" class="form-control">
         </div>
          <div  class="col-sm-7">
           <label>Email</label>
           <input readonly="readonly" id="email" type="text" name="email" placeholder="correo.." class="form-control">
           <h6 style="color: red"><?php echo form_error("email");?></h6>
         </div>
     </div>

     <br>
     <div class="row">
         <div class="col-sm-5">
           <label>Tipo de Sangre</label>
           <select class="form-control" id="tipo_sangre" name="tipo_sangre">
              <option selected="false">selecciona tipo sangre..</option>
              <option>A+</option>
              <option>A-</option>
              <option>B+</option>
              <option>B-</option>
              <option>O+</option>
           </select>
         </div>
          <div class="col-sm-7">
           <label>Genero</label>
           
          <select readonly="readonly" class="form-control" name="genero" id="genero">
            <option selected="false">seleccione genero</option>
            <option>M</option>
            <option>F</option>
          </select>

         </div>
     </div>
      <br>
       <div class="row">
         <div class="col-sm-5">
           <label>Fecha Ultima intervencion</label>
           <input readonly="readonly" type="date" placeholder="Ultima intervencion" name="f_ultima_inter" class="form-control" id="f_ultima_inter">
          </div>
          <div class="col-sm-7">
           <label>Doctor/Doctora</label>
            <input type="text" name="" id="medico" class="form-control">
           <h6 style="color: red"><?php echo form_error("doctor");?></h6>
         </div>
     </div>


     <hr>


     <div class="row">
        <div class="col-sm-4">
          <label>Resumen Hist. Medico</label>
        </div>
         <div class="col-sm-8">
            <textarea readonly="readonly" style="border-top-color: white; border-right-style: none; border-left-style: none;" class="form-control" rows="3" name="historial_medico" placeholder="Historial medico.." id="historial_medico"></textarea>
          </div>
     </div>
      
      <hr>
      <h4 style="color:green;">Direccon</h4>
      <hr>
       <div class="row">
         
         <div class="form-group col-sm-5">
          <label for="inputState">Provincia</label>
           <input type="text" name="" id="provincia" class="form-control">


        </div>


       </div>


      <div class="row">
        <div class="col-sm-5">
           <label>Calle/Sector</label>
           <input readonly="readonly" type="text" name="calle" id="calle" placeholder="Calle, Sector" class="form-control">
           <h6 style="color:red"><?php echo form_error("calle");?></h6>
         </div>

          <div class="col-sm-7">
           <label>Ciudad</label>
           <input readonly="readonly" id="ciudad" type="text" name="ciudad" placeholder="Ciudad" class="form-control">
           <h6 style="color: red"><?php echo form_error("ciudad");?></h6>
         </div>
     </div>

      <div class="form-group row">
        <div class="col-sm-5">
          <span>Telefono[Home/Movil]</span>
        </div>
        <div class="col-sm-7">
         <input type="text" readonly="readonly" name="telefono" id="telefono" class="form-control" placeholder="Ingresar un numero de Telefono">
        </div>
      </div>
  

     <hr>

     </div>  <!--********************card body*********************************-->
     </div> <!--********************colapsa*********************************-->


      


   
         <hr>

        <div class="row">
          <div class="col-sm-6">
            <input type="submit" class="btn btn-outline-info my-2 my-sm-0" value="hacer cita"  >
          </div>
          </div>



  	
  </div> <!-- middle column-->























</div> 	<!--main row ********************************************** -->










<script>

var citas = <?php echo json_encode($citas)?>;



 //console.log(citas);








    /*   var initialize_calendar;

       initialize_calendar = function()
       {
       	 $('#calendario').each(function(){
       	 	var calendar = $(this);
       	 	calendar.fullCalendar({

       	 	});
       	 })
       };

       $(document).on('turbolinks:load',initialize_calendar);*/




	$(document).ready(function(){

		$('#calendario').fullCalendar({
          
               header:{
                  left:'prev,next today',
                  center:'title',
                  right:'month,agendaWeek,agendaDay'
                },
                selectable:true,
                selectHelper:true,
                editable:true,
                eventLimit:true,


                eventClick: function(event)
                {   
                   process(event);
                 
                },


                viewRender: function(view)
                { 
                	$('#calendario').fullCalendar('removeEvents');
                	$('#calendario').fullCalendar('addEventSource',citas);

                }
                   
		});
	})





  function process(datos)
  {
       
     var cedula= document.getElementById('c_cedula');
     var fecha= document.getElementById('fecha');
     var h_final= document.getElementById('hora_final');
     var comentario= document.getElementById('comentario');
     var nombre= document.getElementById('nombre');
     var apellido= document.getElementById('apellido');
     var fecha_nac= document.getElementById('fecha_nac');
     var email= document.getElementById('email');
     var tipo_sangre= document.getElementById('tipo_sangre');
     var fecha_ult_inter= document.getElementById('f_ultima_inter');
     var genero= document.getElementById('genero');
     var doctor= document.getElementById('medico');
     var resumen_hist= document.getElementById('historial_medico');
     var provincia= document.getElementById('provincia');
     var calle= document.getElementById('calle');
     var ciudad= document.getElementById('ciudad');
     var telefono= document.getElementById('telefono');

     
     
     cedula.value = datos['cedula'];
     fecha.value = datos['start']['_i'];
     h_final.value = datos['end']['_i'];
     comentario.value = datos['comentario'];
     nombre.value = datos['nombre'];
     apellido.value = datos['apellido'];
     fecha_nac.value = datos['fecha_nac'];
     email.value = datos['email'];
     tipo_sangre.value = datos['tipo_sangre'];
    // fecha_ult_inter.value = new Date();  // cambiar luego
     genero.value = datos['genero'];
     doctor.value = datos['title'];
     resumen_hist.value = "historial no disponible";
     provincia.value = datos['provincia'];
     calle.value = datos['calle'];
     ciudad.value = datos['ciudad'];
     telefono.value = datos['telefono'];


     










     
     console.log(datos);


  







  }






 /*
  
  $.getScript('/events/new',function(){
                      
                      $('#event_date_range').val(moment(start).format("MM/DD/YYYY HH:mm")+'-'+moment(end).format(date_range_picker()));

                       $('.start_hidden').val(moment(start).format("MM/DD/YYYY HH:mm"));

                       $('.end_hidden').val(moment(end).format("MM/DD/YYYY HH:mm"))

                	});



 */





</script>









</body>
</html>