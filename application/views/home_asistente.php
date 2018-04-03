<?php   

  $dato_usuario = $this->session->userdata();

  $doctores = $datos['doctores'];
 
  $citas = $datos['citas'];
   
  $provincias = $datos['provincias'];
  
  $pacientes = $datos['pacientes']; 
  
  $CI =& get_instance();
  
  $num_citas = "000-101-";

  
  //var_dump($doctores);

  //$provincias = $this->session->userdata('provincias');

  $userdata['userID'] = $dato_usuario['userID'];
  $userdata['cedula'] = $dato_usuario['cedula'];
  $userdata['nombre'] = $dato_usuario['nombre'];
  $userdata['apellido'] = $dato_usuario['apellido'];
  $userdata['email'] = $dato_usuario['email'];
  $userdata['password'] = $dato_usuario['password'];
  $userdata['role'] = $dato_usuario['role'];
  $userdata['foto_path'] = $dato_usuario['foto_path'];
  
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
        <li class="list-group-item active"><h4>Citas Recientes</h4></li>
         <hr>
         <div class="table" style="width:95%;margin:auto;">
         <table class="table table-hover" id="table">
         	<tbody>
            <?php foreach ($citas as $key => $cita):?>
             <tr>
               
               <td>
                  
                      <a href="#">
                       <?php echo $num_citas.$cita['id_cita']." ".$CI->toString($pacientes,$cita['id_paciente'])." ☺";?>
                        </a>
                
               </td>
              
             </tr>
         		<?php endforeach;?>
         	</tbody>
         </table>
         </div>
      </ul>
  	</div>
  </div> <!-- left column-->
    
  <div class="col-sm-6">

  	<div class="jumbotron" style="padding:3px;">
      <nav aria-label="breadcrumb">
       <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"><h4 style="color:green;">Detalles</h4>
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
             <span class="input-group-text">Fecha Cita</span>
             </div>
              <input type="date" class="form-control" name="fecha_cita">
           </div>
           
             <span style="color: red"><?php echo form_error('fecha_cita');?></span>
           


             <div class="input-group mb-3">
              <div class="input-group-prepend">
             <span class="input-group-text">Hora Inicio</span>
             </div>
              <input type="time" class="form-control" name="hora_inicio">
              
           </div>
           <div>
             <span style="color: red"><?php echo form_error('hora_inicio');?></span>
           </div>
             
             <!-- Esta input text me me informa sobre el estado de una peticion-->
              <input type="hidden" name="info" id="info">


            <div class="input-group mb-3">
              <div class="input-group-prepend">
             <span class="input-group-text">Hora final</span>
             </div>
              <input type="time" class="form-control" name="hora_final">
             
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
             <textarea style="border-top-color: white; border-right-style: none; border-left-style: none;" class="form-control" rows="2" name="comentario" placeholder="Algun comentario acerca de la cita..."></textarea>
           </div>
           </div>
   
        <hr>


   <!--********************colapsa*********************************-->
        <div class="collapse" id="colapsa_form">
         <a href="#" onclick="setEditable();" style="margin-left:85%;">Editar</a>
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
           <input readonly="readonly" type="date" placeholder="Ultima intervencion" name="f_ultima_inter" class="form-control" id="f_ultima_inter">
          </div>
          <div class="col-sm-7">
           <label>Doctor/Doctora</label>
            <select class="form-control" name="doctor" id="medico">
            <option selected="false">seleccionar doctor...</option>
              <?php foreach ($doctores as $key => $doctor){ ?>

                <option><?php echo $doctor['id']."- ".$doctor['nombre']." ".$doctor['apellido'];?></option>

               <?php }?>
              
           </select>
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
          <select readonly="readonly" id="provincia" name="provincia" class="form-control">
          <option>elige tu provincia</option>
          <?php foreach($provincias as $p):?>
            <option><?php echo $p;?></option>
            <?php endforeach;?>
          </select>
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
         <input type="text" readonly="readonly" name="telefono" id="c_telefono" class="form-control" placeholder="Ingresar un numero de Telefono">
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













<script src="<?php echo base_url("assets/js/js_file.js")?>">
 
</script>


</body>
</html>