<?php



 $userData = $this->session->userdata();

 



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


    			<div class="col-sm-8 col-md-8 col-xs-12">
    				<div class="card">
            

               <div class="card-header">

                   <div class="row">

                     <div class="col-sm-4">
                       <h5 style="color: green; font-style: italic;">Administrar Personal</h5>
                     </div>
                  
                     <div class="col-sm-8">
                       <button style="float: right;" type="button" onclick="esconder();" class="btn btn-primary" id="btn_cita">Ver Calendario</button>
                     </div>

                   </div>
                   

               </div>

              
              <div id="calendar" style="padding: 15px; display:none;">
                <!-- calendario va ahi -->
              </div>
            

                       <ul class="list-group" id="lista">
                           <li class="list-group-item">Cras justo odio</li>
                           <li class="list-group-item">Dapibus ac facilisis in</li>
                           <li class="list-group-item">Morbi leo risus</li>
                           <li class="list-group-item">Porta ac consectetur ac</li>
                           <li class="list-group-item">Vestibulum at eros</li>
                        </ul>   
                       
                       
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
   
   $(document).ready(function(){

      /* var e = {
                      title:"primer_evento",
                      start:"2018-03-30",
                      end:"2018-04-01 24:00:00",
                      url:"http://google.com",
                      backgroundColor:"green",
                   
                   }*/

      $('#calendar').fullCalendar({
       
        // events:[]
      });
  
   });
  
   
 






  var counter = 2;
  function esconder(){
    var div = document.getElementById('calendar');
    var lista = document.getElementById('lista');
    var btn_cita = document.getElementById('btn_cita');
       
    if(counter%2 == 0){
       div.setAttribute("style","display:block");
       lista.setAttribute("style","display:none");
       btn_cita.innerHTML = "Esconder Calendario";
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


