<style>
	.center{
		margin-right: 100px;
		margin-top: 25px;
		margin-left: 100px;
		border: 1px solid gray;
		border-radius: 5px;
		padding:10px;
    font-size: 18px;
    margin-bottom:15px;
	}

  



</style>




<div class="center">
	
  
  
  <form action="<?php echo base_url("index.php/Controlador/register_patient")?>" method="post" >
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">Nombre</label>
      <input type="text" class="form-control" name="nombre" placeholder="nombre">
      <h5 style="color: red"><?php echo form_error('nombre'); ?></h5>
    </div>
    <div class="form-group col-md-6">
      <label for="">Apellido</label>
      <input type="text" class="form-control" name="apellido" placeholder="apellido">
     <h5 style="color: red"><?php echo form_error('apellido'); ?></h5>
    </div>
  </div>


 <div class="form-group">
 	<label for="cedula">Cedula</label>
 <input type="text" name="cedula" class="form-control" placeholder="cedula de identidad">
 <h5 style="color: red"><?php echo form_error('cedula'); ?></h5>
 </div>

  <div class="form-group">
 	<label for="cedula">Email</label>
 <input type="text" name="email" class="form-control" placeholder="correo electronico">
 <h5 style="color: red"><?php echo form_error('email'); ?></h5>
 </div>




  <div class="form-group">
    <label for="">Fecha de nacimiento</label>
    <input type="date" name="fecha_nac" class="form-control">
    <h5 style="color: red"><?php echo form_error('fecha_nac'); ?></h5>
  </div>




  
  <div class="form-group">
    <label for="inputAddress2">Calle</label>
    <input type="text" class="form-control" name="calle"  placeholder="apartamento,piso">
    <h5 style="color: red"><?php echo form_error('calle'); ?></h5>
  </div>



 




  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Ciudad</label>
      <input type="text" class="form-control" id="inputCity" name="ciudad">
      <h5 style="color: red"><?php echo form_error('ciudad'); ?></h5>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Provincia</label>
      <select name="provincia" class="form-control">
       <option selected>elige tu provincia</option>
       <?php foreach($provincias as $p):?>
        <option><?php echo $p;?></option>
       <?php endforeach;?>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" name="zip" placeholder="opcional">
    </div>
  </div>


 <div class="form-group row">

  <div class="col-sm-6">
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
         Alergico a medicamentos.
      </label>
    </div>
    </div>
  </div>

  
        <div class="row">
        <div class="form-group">
         <div class="col-md-12">
         <label>Telefono</label>
         <input class="form-control" type="text" name="telefono" placeholder="Telefono">
      </div>
      </div>
  </div>
  </div>




 <div class="row">
  	<div class="form-group col-md-6">
      <label for="inputState">Genero</label>
      <select id="inputState" class="form-control" name="genero" >
        <option selected>M</option>
        <option>F</option>
      </select>
    </div>
 


  
  	<div class="form-group col-md-3">
      <label for="inputState">Tipo de sangre</label>
      <select id="inputState" class="form-control" name="tipo_sangre">
        <option selected>A+</option>
        <option>A-</option>
        <option>B+</option>
        <option>B-</option>
        <option>O+</option>
      </select>
    </div>

  </div>
 
 
  <div class="row">
      <div class="col-md-4">
         <button type="submit" class="btn btn-primary">Registrar</button>
         <button type="button" class="btn btn-danger" id="cancelar">Cancelar</button>
       </div>

      <div class="col-md-8">
        <div class="alert alert-primary" role="alert">
        	<?php echo $this->session->flashdata('message');?>
        </div>
       </div>

   </div>
 

</form>
</div>




<script>
  
 $(document).ready(function(){

   $('#cancelar').click(function(){

     if(confirm('Seguro Quieres Cancelar?')){

        window.location.href= "<?php echo base_url('index.php/Controlador/entrar');?>";
     }
      
   });
 });




</script>




</body>
</html?