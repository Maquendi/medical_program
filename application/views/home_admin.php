<?php



 $userData = $this->session->userdata();
 
 $CI =& get_instance();
  
 $num_citas = "000-101-";
 
 $citas = $datos['citas'];





?>



<div id="wrapper" style="border: 1px solid black">
	
 <!--side bar -->
   
  


   <div id="sidebar-wrapper">

        <div class="profile_pic" style="min-height:10px">
        	
        	<div class="row">
        	<div class="col col-sm-4" >
        	<img src="<?php echo $this->session->userdata('foto_path')?>" width="80px"   height="80px" class="img-rounded"/>
            </div>

        	 <div class="col col-sm-8">

        	 <small style="margin-bottom:2px"><?php echo $userData['nombre']." ".$userData['apellido']?></small>
        	 <div>
             	<p style="margin-bottom: 2px"><small style="font-style: italic; color:#008080">Quick Connect</small></p>
             </div>
        	 <span><img src="<?php echo base_url("images/icons/facebook.png")?>"></span>
        	 <span><img src="<?php echo base_url("images/icons/instagram.png")?>"></span>
             <span><img src="<?php echo base_url("images/icons/twitter.png")?>"></span>
             <span><img src="<?php echo base_url("images/icons/youtube.png")?>"></span>
        	 </div>


          </div>
        </div>


   	    <div class="dark" style="min-height:10px">
        	<img src="<?php echo base_url("images/icons/dashboard.png")?>">
        	<span>Actividades Comunes</span>
        </div>


    <ul class="sidebar-nav">
        
        <hr>
        <li> <a href="<?php echo base_url("index.php/Controlador/crear_usuario")?>">Añadir Usuario</a> </li>
         <hr>
        <li> <a href="#">Configuraciones</a> </li>
         <hr>
        <li> <a href="#">Imprimir Reporte</a> </li>

    	<hr>
        <li> <a href="#">Ver Calendario de Citas</a> </li>
         <hr>
        <li> <a href="#">Configuraciones</a> </li>
         <hr>
        <li> <a href="#">Salir de Cuenta</a> </li>
    </ul>

 
 











   </div>

<!--page content -->
     
    <div id="page-content-wrapper">
    	<hr>
      <!--	<div class="container-fluid"> -->

    		<div class="row">


    			<div class="col-sm-6 col-md-6 col-xs-12">
    				<div class="card">
            

               <div class="card-header">

                   <div class="row">

                     <div class="col-sm-4">
                       <h6 style="color: green; font-style: italic;">Administrar Personal</h6>
                     </div>
                  
                     <div class="col-sm-8">
                       <button style="float: right;" type="button" onclick="esconder();" class="btn btn-primary" id="btn_cita">Ver Calendario</button>
                     </div>

                   </div>
                   

               </div>

              
              <div id="calendario" style="padding: 15px; display:none;">
                <!-- calendario va ahi -->
              </div>
            
              <div id="lista">

                    <table class="table table-hover" id="table">
                        <thead>
                          <th>Num Cita</th>
                          <th>Paciente</th>
                          <th>Fecha Creada</th>
                          <th>Estatus</th>
                        </thead>


                           <tbody>
                     
                      <?php for($i=0;$i<count($citas);$i++){?>
                           <tr>

                           <td>
                           <a href="<?php echo base_url("index.php/Controlador/view_detail/{$citas[$i]['id_cita']}")?>">
                           <?php echo $num_citas.$citas[$i]['id_cita'];?>
                           </a>
                           </td>

                           <td>
                           <a href="<?php echo base_url("index.php/Controlador/view_detail/{$citas[$i]['id_cita']}")?>">
                           <?php echo $citas[$i]['Paciente'];?>
                           </a>
                           </td>
                           
                           <td>
                           <a href="<?php echo base_url("index.php/Controlador/view_detail/{$citas[$i]['id_cita']}")?>">
                           <?php echo $citas[$i]['hora_registrada'];?>
                           </a>
                           </td>

                           <td>
                           <a href="<?php echo base_url("index.php/Controlador/view_detail/{$citas[$i]['id_cita']}")?>">
                           <?php echo $citas[$i]['estado'];?>
                           </a>
                           </td>
              
                           </tr>
                      <?php } ?>
                   </tbody>
         </table>
                     














                       
              </div>
                       
            </div>
    			</div>



    			<div class="col-sm-4 col-md-4 col-xs-12">
    				<div class="jumbotron" style="padding:2px;">

    					<div id="carouselExampleIndicators" class="carousel slide"   data-ride="carousel">
                            <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                           </ol>

                       <div class="carousel-inner">
                          <div class="carousel-item active">
                          	 <h3><a href="#">Personal Asistente</a></h3>
                           <img class="d-block w-100" src="<?php echo base_url("images/images/asistente.jpg")?>" width="400px" height="350px">
                           
                           </div>


                           <div class="carousel-item">
                           	<h3><a href="#">Medicos Especialistas</a></h3>
                             <img class="d-block w-100" src="<?php echo base_url("images/images/personal.jpg")?>" width="400px" height="350px">
                                
                              


                           </div>


                             <div class="carousel-item">
                             	<h3><a href="#">Junto Administrativa</a></h3>
                              <img class="d-block w-100" src="<?php echo base_url("images/images/admin.jpg")?>" width="400px" height="350px">

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
    			</div>
    		</div>
    	</div>
    <!--</div> -->
    
    <!--page content ends here -->




</div>


<script >

   
  
   var citas = <?php echo json_encode($datos['citas'])?>;
   

  
  
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
                   //process(event);
                 
                },


                viewRender: function(view)
                { 
                  $('#calendario').fullCalendar('removeEvents');
                  $('#calendario').fullCalendar('addEventSource',citas);

                }
                   
    });
  })







  
 






  var counter = 2;
  function esconder(){
    var div = document.getElementById('calendario');
    var lista = document.getElementById('lista');
    var btn_cita = document.getElementById('btn_cita');
       
    if(counter%2 == 0){
       div.setAttribute("style","display:block");
       lista.setAttribute("style","display:none");
       btn_cita.innerHTML = "Ver Listado";
    }
    else
    {
       div.setAttribute("style","display:none");
       lista.setAttribute("style","display:block");
       btn_cita.innerHTML = "Ver Calendario";
    }
    
    counter++;
  }



</script>



</body>
</html>


