
 <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.css")?>"/>
     <link rel='stylesheet' href='<?php echo base_url("assets/css/fullcalendar.css");?>' />
     <script src='<?php echo base_url("assets/js/jquery.min.js");?>'></script>
     <script src='<?php echo base_url("assets/js/moment.min.js");?>'></script>
     <script src='<?php echo base_url("assets/js/fullcalendar.js");?>'></script>
     <script src="<?php echo base_url("assets/js/bootstrap.js")?>"></script>



<?php 

$yo = $this->session->userdata();



?>



<hr>
<div class="container">

<div class="row" >
  <div class="col col-md-5">
     <div class="card mb-4">
         <div style="background-color:blue; opacity:.9; padding-left:5px; border-radius:5px;">
         	<p class="card-title">
         		<h4 style="color:white;">
         		  Registrar Consulta
         		</h4>
           </p>
          </div>

     	 <div style="margin-left:4px; margin-right: 4px;">
         <div class="card-body">
          <p class="card-text"></p>
          	<div class="row">
               
              <div class="col-sm-3">
                	<div class="input-group form-group">
                     <button type="button" class="btn btn-outline-success" id="btn_buscar">Buscar</button>
                	</div>
               </div>


                <div class="col-md-9">
                	<div class="input-group form-group">
                		<input type="text" name="" placeholder="Buscar paciente" class="form-control">
                	</div>
                </div> 

              </div>


              <div class="collapse" id="colapsa_form">
              <div class="card card-body">
              <div class="row">
              <div class="col-sm-3">
                	<div class="input-group form-group">
                     <label>Nombre</label>
                	</div>
               </div>
                <div class="col-md-9">
                	<div class="input-group form-group">
                		<input type="text" name="" placeholder="paciente..." class="form-control">
                	</div>
                </div> 
              </div>


              <div class="row">
              <div class="col-sm-3">
                	<div class="input-group form-group">
                     <label>Apellido</label>
                	</div>
               </div>
                <div class="col-md-9">
                	<div class="input-group form-group">
                		<input type="text" name="" placeholder="apellido" class="form-control">
                	</div>
                </div> 
              </div>


              <div class="row">
              <div class="col-sm-3">
                	<div class="input-group form-group">
                     <label>Email</label>
                	</div>
               </div>
                <div class="col-md-9">
                	<div class="input-group form-group">
                		<input type="email" name="" placeholder="email" class="form-control">
                	</div>
                </div> 
              </div>


              <div class="row">
              <div class="col-sm-3">
                	<div class="input-group form-group">
                     <label>Nacimiento</label>
                	</div>
               </div>
                <div class="col-md-9">
                	<div class="input-group form-group">
                		<input type="text" name="" placeholder="fecha de nacimiento" class="form-control">
                	</div>
                </div> 
              </div>


              



              <div class="row">
              <div class="col-sm-3">
                	<div class="input-group form-group">
                     <label>Nombre</label>
                	</div>
               </div>
                <div class="col-md-9">
                	<div class="input-group form-group">
                		<input type="text" name="" placeholder="paciente..." class="form-control">
                	</div>
                </div> 
              </div>




              



              <div class="row">
              <div class="col-sm-3">
                	<div class="input-group form-group">
                     <label>Consulta fecha</label>
                	</div>
               </div>
                <div class="col-md-9">
                	<div class="input-group form-group">
                		<input type="date" name="" class="form-control">
                	</div>
                </div> 
              </div>


              <div class="row">
              <div class="col-sm-3">
                	<div class="input-group form-group">
                     <label>Detalle</label>
                	</div>
               </div>
                <div class="col-md-9">
                	<div class="input-group form-group">
                		<textarea style="border-right-style:none;border-left-style: none;border-top-style:none;" class="form-control" rows="2" placeholder="comentario ultima Consulta"></textarea>
                	</div>
                </div> 
              </div>


              <div class="row">
              <div class="col-sm-3">
                	<div class="input-group form-group">
                     <label>Nombre</label>
                	</div>
               </div>
                <div class="col-md-9">
                	<div class="input-group form-group">
                		<input type="text" name="" placeholder="paciente..." class="form-control">
                	</div>
                </div> 
              </div>

                         
        </div>
        </div>
        </div>
       </div>



      </div>


    
   <hr>
   
    <div class="card">
     <div class="card-body">
    <h5 class="card-title"><a class="form-control btn-outline-info" href="#" style="text-decoration:none;" >Proximas Visistas</a></h5>
    <p class="card-text">
    	
    </p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

   </div>
    <img class="card-img-bottom" src="<?php echo base_url("images/images/image1.jpg")?>" alt="Card image cap">
  </div>


  </div>



 <!-- </div>-->
   
  <div class="col col-md-7">
      
      <div class="row">
      	<div class="col-md-12">
      	<div class="jumbotron" style="padding:0px 0px 0px 0px; margin-bottom:60px; background-color: white;">
   	       
   	       <div style="margin:0px; background-color: blue;height:55px; border-radius:4px; padding:0px 0px 1px 0px;">

   	       	 <h4><button onclick="display(this);" class="btn btn-primary btn-lg form-control" style="font-size:25px; background-color: blue;" id="btn_pago">
   	       	 	Pago de Factura
   	       	 </button></4>

   	       </div>
             
              <hr>
             







            <div class="collapse" id="pago">
         
              <!--search aquiii  -->
              <div class="form-group row" style="margin:20px;">
              <div class="input-group form-group">
              <div class="col-sm-4">
                  <button type="button" class="btn btn-outline-success form control">
                  	Buscar Paciente
                  </button>
               </div>

               <div class="col-sm-8">
                <input type="text" name="" class="form-control" placeholder="Cedula/id Paciente">
                </div>
               </div> 
              </div>
 
  
            <!--search aquiii  -->

             <div class="card card-body">
                
                
                <form>

                 
         

                	<h5 style="color: green;"><p>Forma de Pago</p></h5>

                	<label class="radio-inline">
                      <input checked="true" type="radio" name="optradio" onchange="pay_method(this);" id="efectivo">
                      Pago Efectivo	
                    </label>

                    <label class="radio-inline">
                    <input type="radio" name="optradio" onchange="pay_method(this);" id="tarjeta">
                       Tarjeta De Credito
                    </label>
                    <hr>


                    <div id="pago_credito" style="display:none" >

                        <div class="row">
                        	<div class="col-md-4">
                        		<select class="form-control">
                        			<option selected="false">
                        				tipo tarjeta
                        			</option>
                        			<option>
                        				Master Card
                        			</option>
                        			<option>
                        				Visa
                        			</option>
                        			<option>
                        				American Express
                        			</option>
                        			
                        		</select>
                        	</div>


                        	<div class="col-md-7">
                        		<input type="text" name="" class="form-control" placeholder="Numero de La Tarjeta aqui">
                        	</div>

                        </div>


                      <br>
                     <div class="row">
                        <div class="input-group">
                     	<div class="col-md-4">
                     		<span>Tarjeta Teniente</span>
                     	</div>

                     	<div class="col-md-7">
                     		<input type="text" name="" placeholder="Nombre sobre la tarjeta" class="form-control">
                     	</div>
                     	</div>
                     </div>


                        <br>
                     <div class="row">

                        <div class="input-group">
                     	<div class="col-md-4">
                     		<span>Contraseña</span>
                     	</div>

                     	<div class="col-md-3">
                     		<input type="password" name="" placeholder="4 digits" class="form-control">
                     	</div>

                        <div class="col-md-4">
                     		<input type="text" name="" placeholder="Monto $RD" class="form-control">
                     	</div>



                     	</div>





                     </div>





                    	
                    </div>

                    <div id="pago_efectivo">

                       <div class="row">
                        <div class="input-group">
                     	<div class="col-md-4">
                     		<span>Monto $RD</span>
                     	</div>

                     	<div class="col-md-6">
                     		<input type="text" name="" placeholder="monto $RD" class="form-control">
                     	</div>
                     	</div>
                     </div>



                    	
                    </div>
                     



                    <hr>
                   <button class="btn btn-outline-success" type="submit" >Registrar pago
                   </button>
                 
                </form>





            </div>
           </div>






        </div>
        </div>
      </div>



           

      <hr>
      <div style="min-height:30px;"></div>
      <div class="row">
      	<div class="col-md-12">
      	<div class="jumbotron" style="padding: 0px 0px 0px 0px; background-color: white">
   	       
   	      <div class="card mb-4">
           <div style="background-color:blue;padding:0px 0px 0px 0px; border-radius:4px;">
         	

         	
         		 <button onclick="display(this);" class="btn btn-primary btn-lg form-control" style="font-size:25px; background-color:blue;" id="btn_calendario">Ver Calendario de Citas
   	            </button>
   	       	   
               
             </div>



     	 <div style="margin-left:4px; margin-right: 4px;">
         <div class="card-body">
          <p class="card-text"></p>


          <div id="calendario" style="display: none;">
          	<!--Calendario va ahi -->
          </div>
        </div>
        </div>
      </div>






























<div style="min-height: 25px;"></div>
  
  <div style="display: none;">
    <button type="button" data-toggle="collapse" data-target="#colapsa_form" aria-expanded="true" aria-controls="colapsa_form" id="btn_colapsa">
     colapsa</button>
    </div>

 




 
 <script>
 	var this_btn = document.getElementById('btn_colapsa');

  $(document).ready(function(){
      $('#btn_buscar').click(function(){
         click(this_btn);
      });
  });


function click(btn){
	btn.click();
}


var div_credito = document.getElementById('pago_credito');
var div_efectivo = document.getElementById('pago_efectivo');

function pay_method(btn)
{


 	if(btn.id == "tarjeta")
 	{
 		div_credito.style.display = "block";
 		div_efectivo.style.display = "none";
 		console.log("tarjeta display");

 	}else
 	{
 		div_credito.style.display = "none";
 		div_efectivo.style.display ="block";
 		console.log("efectivo display");
 	}

}
 

 function display(btn)
 {
 	var div_hidden = document.getElementById('calendario');
 	var div_pago = document.getElementById('pago');
 
 	if(btn.id == "btn_pago")
 	{
 		colapsar(div_pago);

 	}else if(btn.id == "btn_calendario")
 	{
 		colapsar(div_hidden);
 	}

 }

  



  function colapsar(div)
  {
  	

  	 if(div.style.display == "block")
  	 {
  	 	div.style.display = "none";
  	 }else{
  	 	div.style.display = "block";
  	 }
  }



 function hide_and_show(div)
 {
 	if(div.hasAttribute("style")){
 		console.log("yes");
 		div.removeAttribute("style");
 	}else{
 		console.log("no");
 		div.setAttribute("style","display:none");
 	}

 }
   


   $(document).ready(function(){
       
       $('#calendario').fullCalendar({

       });
   });


 </script>


</body>
</html>