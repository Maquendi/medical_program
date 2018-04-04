
 <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.css")?>"/>
 <script src='<?php echo base_url("assets/js/jquery.min.js");?>'></script>
  <script src="<?php echo base_url("assets/js/bootstrap.js")?>"></script>


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

 <div class="contenedor">

   <div class="row" style="">

   <div class="col-md-2" style="border:1px solid gray; padding-top:10px; background-color:black; opacity:.8">

    <div class="form-group">
      <div class="marker" style="border:1px solid gray; padding-left:30px">
      <legend><h4 style="color:green; font-family:serif;">Foto Usuario</h4></legend>
      <img width="120px" height="120px" id="cuadro">
       
      <hr>
      </div>
      <br>
      <div>
        
        <input type="file" name="userfile" id="file"  required="required">
     
      </div>

    <!--  <?php //echo form_error('userfile');?>-->
    </div>
    <hr>


    <div class="row">
        <div style="width: 90%; margin-left: 10px;">
          <div class="form-group">
         <label style="color:green; font-size: 18px; font-style: italic;"><h4>Genero</h4></label>
        <select  class="custom-select" name="genero" required id="genero">
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
        <select  class="custom-select" name="role" required id="role">
          <option value="admin">Administrador</option>
           <option value="Doctor">Doctor</option>
           <option value="Asistente">Asistente</option>
        </select>
       </div>
       </div>
     </div>





  </div>
  

<div class="col-md-2">
  
</div>



   <div class="col-sm-8" style="" >
   <div class="jumbotron">
     
    <fieldset>
      <br>
      <hr>
    <div class="row">
      <div class="col-sm-6">
       <legend><h3 style="color:green; font-family:serif;">Registro Usuario</h3>
       </legend>
      </div>

      
      <div class="col-sm-4">
       <input type="text" id="campo_buscar" class="form-control" placeholder="Cedula Usuario">
      </div>

      <div class="col-sm-2">
       <button type="button" id="btn_buscar" onclick="procesar();" class="btn btn-outline-success">Buscar</button>
      </div>



     </div>

    <hr>

 

    <div class="form-group row">
      <label for="titulo" class="col-sm-2 col-form-label"><h4>Nombre</h4></label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="nombre" placeholder="nombre" id="nombre">
         <span style="color:red"><?php echo form_error('nombre');?></span> 
      </div>
    </div>



   <div class="form-group row">
      <label for="titulo" class="col-sm-2 col-form-label"><h4>Apellido</h4></label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="apellido" placeholder="apellido" id="apellido">
        <span style="color:red"><?php echo form_error('apellido');?></span> 
      </div>
    </div>



    <div class="form-group row">
      <label for="titulo" class="col-sm-2 col-form-label"><h4>Cedula</h4></label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="cedula" placeholder="cedula" id="cedula">
         <span style="color:red"><?php echo form_error('cedula');?></span> 
      </div>
    </div>




    <div class="form-group row">
      <label for="titulo" class="col-sm-2 col-form-label"><h4>Correo</h4></label>
      <div class="col-sm-6">
        <input type="email" class="form-control" name="email" placeholder="correo" id="correo">
         <span style="color:red"><?php echo form_error('email');?></span> 
      </div>
    </div>

    
   


    <div class="form-group row">
      <label for="titulo" class="col-sm-2 col-form-label"><h4>B. date</h4></label>
      <div class="col-sm-6">
        <input type="date" class="form-control" name="f_nacimiento" placeholder="fecha de nacimento" id="birthdate">
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
            <p id="mensaje"></p>
            <?php echo $this->session->flashdata('registrado'); ?>
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
  




  function validate_cedula(cedula){
      
      var ced = cedula.split("-");
      
      if(ced.length ==3){
         if(ced[0].length ==3){
            if(ced[1].length==7 || ced[1].length ==6){
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


 
 $(document).ready(function(){
   

   $('#cancel').click(function(){

     if(confirm('Seguro Quieres Cancelar?')){
        window.location.href= "<?php echo base_url('index.php/Controlador/entrar');?>";
     }
      
   });

});




function procesar()
{
   var ced = document.getElementById('campo_buscar').value;
      

       if(validate_cedula(ced))
        {
          $.ajax({
            type:'POST',
            url:"<?php echo site_url('Controlador/buscar_usuario');?>",
            data:{cedula:ced},
             success:function(result){
               
               if(result !== "false")
               {
                  document.getElementById('mensaje').innerHTML = "<h5 style='color:orange;'>Este Usuario Ya esta Registrado.</h5>";
               }else
               {
                 document.getElementById('mensaje').innerHTML = "<h5 style='color:green;'>Puede Proseguir Con El Registro.</h5>";
                   $('#cedula').val(ced);
               }
            }
          })

        }else{
          document.getElementById('mensaje').innerHTML = "<h5 style='color:red'>Formato De Cedula Incorrecto.</h5>";
        }
}


 
 function replaceDatos(datos)
 {
    ///console.log(datos);
   

     document.getElementById('nombre').value = datos[0]['nombre'];
     document.getElementById('apellido').value = datos[0]['apellido'];
     document.getElementById('birthdate').value = datos[0]['f_nacimiento'];
     document.getElementById('correo').value = datos[0]['email'];
     document.getElementById('genero').value = datos[0]['genero'];
     document.getElementById('cedula').value = datos[0]['cedula'];
     document.getElementById('cedula').setAttribute("readonly","readonly");
     document.getElementById('role').value = datos[0]['role'];
     document.getElementById('cuadro').setAttribute('src',datos[0]['foto_path']); 
     //document.getElementById('file').value=datos[0]['foto_path']; 


 }

</script>


</body>
</html>