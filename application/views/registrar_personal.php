
<style>
  .jumbotron{
     width: 90%;
     margin: auto;
     padding-top: 5px;
     padding-bottom: 10px;
    
  }

  body{
    

    font-family:serif;
    font-style: italic;
    
  }
  .contenedor{
    margin-left:2%;

  }
</style>



<div style="min-height:20px"></div>





  
    
<?php echo form_open_multipart("Controlador/upload"); ?>  

  <!--<form action="<?php// echo base_url("index.php/Controlador/upload")?>" method="post"> -->

 <div class="contenedor">

   <div class="row">

   <div class="col-sm-3" style="border:1px solid gray; padding-top:10px; background-color:black; opacity:0.9">

    <div class="form-group">
      <div class="marker" style="border:1px solid gray; padding-left:30px">
      <legend><h4 style="color:green; font-family:serif;">Foto Usuario</h4></legend>
      <img class="img-responsive" width="120px" height="120px" src="<?php echo base_url("images/icons/profile1.png")?>" id="cuadro">
       
      <hr>
      </div>
      <br>
      <div>
        
        <input type="file" name="userfile" required id="customFile">
        
      </div>

    <!--  <?php //echo form_error('userfile');?>-->
    </div>
    <hr>


    <div class="row">
        <div style="width: 90%; margin-left: 10px;">
          <div class="form-group">
         <label style="color:green; font-size: 18px; font-style: italic;"><h4>Genero</h4></label>
        <select  class="custom-select" name="genero" required>
          <option value="H">Hombre</option>
           <option value="M">Mujer</option>
        </select>
         </div>
       </div>
    </div>
   

       <div class="row">
        <div style="width: 90%; margin-left: 10px;">
        <div class="form-group">
        <label style="color:green; font-size: 18px; font-style: italic;"><h4>Role</h4></label>
        <select  class="custom-select" name="role" required>
          <option value="admin">Administrador</option>
           <option value="Doctor">Doctor</option>
           <option value="Asistente">Asistente</option>
        </select>
       </div>
       </div>
     </div>





  </div>
  





   <div class="col-sm-8" style="">
   <div class="jumbotron">

    <fieldset>
    <legend><h3 style="color:green; font-family:serif;">Registro Usuario</h3></legend>
    <hr>

 

    <div class="form-group row">
      <label for="titulo" class="col-sm-2 col-form-label"><h4>Nombre</h4></label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="nombre" placeholder="nombre">
         <span style="color:red"><?php echo form_error('nombre');?></span> 
      </div>
    </div>



   <div class="form-group row">
      <label for="titulo" class="col-sm-2 col-form-label"><h4>Apellido</h4></label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="apellido" placeholder="apellido">
        <span style="color:red"><?php echo form_error('apellido');?></span> 
      </div>
    </div>



    <div class="form-group row">
      <label for="titulo" class="col-sm-2 col-form-label"><h4>Cedula</h4></label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="cedula" placeholder="cedula">
         <span style="color:red"><?php echo form_error('cedula');?></span> 
      </div>
    </div>




    <div class="form-group row">
      <label for="titulo" class="col-sm-2 col-form-label"><h4>Correo</h4></label>
      <div class="col-sm-6">
        <input type="email" class="form-control" name="email" placeholder="correo">
         <span style="color:red"><?php echo form_error('correo');?></span> 
      </div>
    </div>

    
   


    <div class="form-group row">
      <label for="titulo" class="col-sm-2 col-form-label"><h4>B. date</h4></label>
      <div class="col-sm-6">
        <input type="date" class="form-control" name="f_nacimiento" placeholder="fecha de nacimento">
        <span style="color:red"><?php echo form_error('f_nacimiento');?></span> 
      </div>
    </div>

      <hr>
       
       <hr>
      
         </fieldset>
        <div class="row">
          
          <div class="col-sm-4">
           <input type="submit" value="Registrar" class="btn btn-success">
           <input type="button" value="Cancelar" class="btn btn-danger" id="cancel">
           </div>
        
          <div class="col-sm-7">
          <div class="alert alert-success" role="alert">
           <h5><?php echo $this->session->flashdata('registrado')?></h5>
         </div>
         </div>


        </div>
       







   </div> <!-- jumbotron class -->
   </div>  <!-- column class -->
  </div>
</div>

 <?php echo form_close();?>  

<!--</form>-->




<script>
  
 $(document).ready(function(){

   $('#cancel').click(function(){

     if(confirm('Seguro Quieres Cancelar?')){
        window.location.href= "<?php echo base_url('index.php/Controlador/entrar');?>";
     }
      
   });
 });




</script>

</body>
</html>