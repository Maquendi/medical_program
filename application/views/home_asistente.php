<?php   

  $userdata = $this->session->userdata();



?>



<style>
	.contenedor{
		margin:10px;
	}
</style>



 <hr>
 <div class="contenedor">
<div class="row">
  <div class="col-sm-3">
  	<div style="height: 100vh;">

      <ul class="list-group">
        <li class="list-group-item active">Citas Para Hoy</li>
         <table class="table table-hover">
         	<tbody>

         		<tr>
         		  
         		  	<td>algo here</td>
         		 
         		</tr>

         		<tr>
         		 
         		  	<td>algo here</td>
         		 
         		</tr>

         		<tr>
         		  
         		  	<td>algo here</td>
         		  
         		</tr>

         		<tr>
         		  
         		  	<td>algo here</td>
         		 
         		</tr>

         	</tbody>

         </table>
      </ul>

  		
  	</div>
  </div> <!-- left column-->
    
  <div class="col-sm-6">

  	<div class="jumbotron" style="padding:3px;">
  		
      <nav aria-label="breadcrumb">
       <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"><h4 style="color:green;">Detalles</h4></li>
       </ol>
     </nav>


     
     <hr>

     <div class="row">
     	<div class="col-sm-10">
          




           <input type="text" class="form-control  " name="cedula" id="cedula" placeholder="buscar Con la Cedula.." data-toggle="tooltip" data-placement="top" title="Cedula va aqui...">

       </div>
       <button class="btn btn-outline-success my-2 my-sm-0" type="button" data-toggle="collapse" data-target="#colapsa_form" aria-expanded="false" aria-controls="colapsa_form" id="btn_buscar">Buscar</button>
     </div>

  	</div><!-- jumbotron-->

          






      <!-- model esta aqui -->

          <div class="modal fade bd-example-modal-sm" tabindex="2" role="dialog" style="margin-top: 80px; padding-right:2px;">
           <div class="modal-dialog modal-sm">
           <div class="modal-content">
            <div class="alert alert-info" role="alert" id="div_mensaje" style="margin-bottom:6px; padding-right:2px;">
                      
            </div>
     


    <div class="row">
    <div class="col-sm-6">
    <a href="#" data-dismiss="modal" style="color:orange; margin-left:5px; display: none;">cerrar</a>
    </div>
    <div class="col-sm-6">
    <a id="a_registrar" href="#" style="color: green; margin-left:98%; margin-top:0px; display:none;">registrar</a>
    </div>
    </div>

             </div>
           </div>

         </div>
      
      <div style="display:none">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm" id="btn_modal"></button>
      </div>
           <!-- model esta aqui -->







        <form method="post" action="<?php echo base_url("index.php/Controlador/guardar_cita")?>">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
             <span class="input-group-text">Fecha Cita</span>
             </div>
              <input type="date" class="form-control" name="fecha">
           </div>


             <div class="input-group mb-3">
              <div class="input-group-prepend">
             <span class="input-group-text">Hora Inicio</span>
             </div>
              <input type="time" class="form-control" name="fecha">
           </div>


            <div class="input-group mb-3">
              <div class="input-group-prepend">
             <span class="input-group-text">Hora final</span>
             </div>
              <input type="time" class="form-control" name="fecha">
           </div>


            <div class="row">
            

           <div class="input-group sm-5">

            <div class="col-sm-3">
            </div>
             <textarea style="border-top-color: white; border-right-style: none; border-left-style: none;" class="form-control" rows="2" name="comentario" placeholder="Algun comentario acerca de la cita..."></textarea>
           </div>
           </div>
   
        <hr>


   <!--********************colapsa*********************************-->
        <div class="collapse" id="colapsa_form">
         <a href="#" style="margin-left:85%;">Editar Datos</a>
        <div class="card card-body">

       <div class="row">
         <div class="col-sm-5">
           <label>Nombre</label>
           <input id="nombre" type="text" name="nombre" placeholder="nombre paciente" class="form-control">
         </div>

          <div class="col-sm-7">
           <label>Apellido</label>
           <input id="apellido" type="text" name="apellido" placeholder="apellido" class="form-control">
         </div>
       </div>

        <br>
       <div class="row">
         <div class="col-sm-5">
           <label>Fecha de Nacimiento</label>
           <input id="fecha_nac" type="date" name="email" placeholder="fecha Nacimiento" class="form-control">
         </div>
          <div class="col-sm-7">
           <label>Email</label>
           <input id="email" type="text" name="email" placeholder="correo.." class="form-control">
         </div>
     </div>

     <br>
     <div class="row">
         <div class="col-sm-5">
           <label>Tipo de Sangre</label>
           <select class="form-control" id="tipo_sangre" name="tipo_sangre">
            <option selected>selecciona tipo sangre..</option>
             <option>A+</option>
              <option>A-</option>
              <option>B+</option>
              <option>B+</option>
              <option>0+</option>
           </select>
         </div>
          <div class="col-sm-7">
           <label>Genero</label>
           
          <select class="form-control" name="genero" id="genero">
            <option selected>seleccione genero</option>
            <option>M</option>
            <option>F</option>
          </select>

         </div>
     </div>
      <br>
       <div class="row">
         <div class="col-sm-5">
           <label>Fecha Ultima intervencion</label>
           <input type="date" placeholder="Ultima intervencion" name="f_ultima_inter" class="form-control" id="f_ultima_inter">
          </div>
          <div class="col-sm-7">
           <label>Su medico</label>
            <select class="form-control" name="medico" id="medico">
            <option selected>selecione medico....</option>
              <option>Medico B</option>
              <option>Medico C</option>
              <option>Medico D</option>
              <option>Medico E</option>
           </select>
         </div>
     </div>


     <hr>


     <div class="row">
        <div class="col-sm-4">
          <label>Resumen Hist. Medico</label>
        </div>
         <div class="col-sm-8">
            <textarea style="border-top-color: white; border-right-style: none; border-left-style: none;" class="form-control" rows="3" name="historial_medico" placeholder="Historial medico.." id="historial_medico"></textarea>
          </div>
     </div>
      
      <hr>
      <h4 style="color:green;">Direccon</h4>
      <hr>
      <div class="row">
        <div class="col-sm-5">
           <label>Calle/Sector</label>
           <input type="text" name="calle" id="calle" placeholder="Calle, Sector" class="form-control">
         </div>

          <div class="col-sm-7">
           <label>Ciudad</label>
           <input id="ciudad" type="text" name="ciudad" placeholder="Ciudad" class="form-control">
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


  <div class="col-sm-3" > <!-- right column-->
  	<div style="height: 100vh;">
  		<nav aria-label="breadcrumb">
           <ol class="breadcrumb">
           <li class="breadcrumb-item active" aria-current="page">
            <h5 style="color: green;">Informacion Usuario</h5>
           </li>
          </ol>
        </nav> 
        
        <div class="row" style="padding-left: 5px;">
        <div class="col-sm-6" >
        	<ul class="list-group">
             <li class="list-group-item"><?php echo $userdata['nombre']." ".$userdata['apellido'] ?></li>
             <li class="list-group-item"> <?php echo $userdata['role'] ?>  </li>
             
            </ul>


        </div>
        <div class="col-sm-6">
          <div>
           <img src="<?php echo $userdata['foto_path'] ?>" width="120px" height="120px"
           style="border-radius:5px;">		
          </div>
        </div>
  		</div>
      <hr>
  	</div>
  </div>
</div> 
</div>



<script>
  
 $(document).ready(function(){
    $('#btn_buscar').click(function(){
       
      var cedula = document.getElementById('cedula').value;
     
     if(validate_cedula(cedula)){
        

       $.ajax({
          type:'POST',
          url:"<?php echo site_url("Controlador/buscar_paciente");?>",
          data:{ced:cedula},
          success: function(result){

             if(result == 'not found'){
               $('#div_mensaje').html("La cedula No Esta Registrada");
               $('#a_registrar').attr('style','display:block');
               click_btn();
             }else{


               //console.log(JSON.parse(result));
                getData(JSON.parse(result));





             }
          }
       });
    }
      else
      {
         if(cedula.length === 0){
          $('#div_mensaje').html("Se Requiere Cedula Para Buscar Paciente");
          $('#a_registrar').attr('style','display:none');
         }else{
          $('#div_mensaje').html("La Cedula No tiene el formato adecuado.");
          $('#a_registrar').attr('style','display:none');
         }
         click_btn();
      }

    })
 })
   
   function click_btn(){

     var btn = document.getElementById('btn_modal');
     btn.click();
   }



function getData(datos){
   
  
     var c_nombre = document.getElementById('nombre');
     var c_apellido = document.getElementById('apellido');
     var c_fecha_nac = document.getElementById('fecha_nac');
     var c_email = document.getElementById('email');
     var c_tipo_sangre = document.getElementById('tipo_sangre');
     var c_genero = document.getElementById('genero');
     var c_f_ultima_inter = document.getElementById('f_ultima_inter');
     var c_medico = document.getElementById('medico');
     var c_historial_medico = document.getElementById('historial_medico');
     var c_calle = document.getElementById('calle');
     var c_ciudad = document.getElementById('ciudad');


     c_nombre.value = datos[0]['nombre'];
      c_apellido.value = datos[0]['apellido'];
       c_fecha_nac.value = datos[0]['fecha_nac'];
        c_email.value = datos[0]['email'];
         c_tipo_sangre.value = datos[0]['tipo_sangre'];
          c_genero.value = datos[0]['genero'];

           c_calle.value = datos[1]['calle'];
           c_ciudad.value = datos[1]['ciudad'];





   

}






  function validate_cedula(cedula){
      
      var ced = cedula.split("-");
      
      if(ced.length ==3){
         if(ced[0].length ==3){
            if(ced[1].length==7){
              if(ced[2].length==1){
                  
                  if(isNumeric(ced[0])){
                     if(isNumeric(ced[1])){
                      if(isNumeric(ced[2])){
                         return true
                      }else{
                        return false;
                      }
                     }else{
                      return false;
                     }
                  }else{
                    return false;
                  }

               }else{
                 return false;
               }
              }else{
               return false;
            }
           }else{
            return false;
         }
         
      }else{
        return false;
    }

  }


  function isNumeric(num){

  if(num.length !== 0){
    return !isNaN(num)
  }else{
    return false;
  }
  
}

</script>













</body>
</html>