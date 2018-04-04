
<style>
	
	body{
		font-style: italic;
		font-family: Verdana;

	}
</style>

<hr>
<div class="container">
	
		


 <hr>
  <div class="col-sm-10">

  	<div class="jumbotron" style="padding:8px;">
       <h5 style="color: green;" >Detalles De Cita</h5>
       <hr>
     </div>

     
          <div class="input-group mb-3">
            <div class="input-group-prepend">
             <span class="input-group-text">Fecha Cita</span>
             </div>
              <input type="text" class="form-control" id="fecha_cita">
           </div>
           
          
             <div class="input-group mb-3">
              <div class="input-group-prepend">
             <span class="input-group-text">Hora Inicio</span>
             </div>
              <input type="time" class="form-control" id="hora_inicio">
              
           </div>
          
           
              

            <div class="input-group mb-3">
              <div class="input-group-prepend">
             <span class="input-group-text">Duracion</span>
             </div>
              <input type="time" class="form-control" id="duracion">
             
           </div>

           

            <div class="input-group mb-3">
              <div class="input-group-prepend">
             <span class="input-group-text">Cedula</span>
             </div>
              <input type="text" class="form-control" id="cedula">
            </div>

            

           <div class="row">
           	  <div class="input-group sm-3">
           	  	<div class="col-sm-4">
           	  		<span>Comentario</span>
           	  	</div>
           	  	<div class="col-sm-8">
             <textarea style="border-top-color: white; border-right-style: none; border-left-style: none;" class="form-control" rows="2" name="comentario" placeholder="Comentario">
             </textarea>
             </div>
           </div>
           </div>
             
           
           
   
        <hr>


   <!--********************colapsa*********************************-->

       <div class="jumbotron" style="padding:8px;">
       	<span style="color: green;"><h5>Datos Del Paciente</h5></span>
       	<hr>
       </div>
        <div class="" id="colapsa_form">
         
        <div class="card card-body">

       <div class="row">
         <div class="col-sm-4">
           <label><span>Nombre del Paciente</span></label>
         </div>

          <div class="col-sm-8">
           <input readonly="readonly" type="text" id="nombre" placeholder="Nombre" class="form-control">
          
         </div>
       </div>

        <br>
       <div class="row">
         <div class="col-sm-5">
           <label>Fecha de Nacimiento</label>
           <input readonly="readonly" id="fecha_nac" type="text" placeholder="fecha Nacimiento" class="form-control">
         </div>
          <div  class="col-sm-7">
           <label>Email</label>
           <input readonly="readonly" id="email" type="text" name="email" placeholder="correo.." class="form-control">
          
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
            <input type="text" id="doctor" class="form-control">
          
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

       	<div class="col-sm-5">
           <label>Calle/Sector</label>
           <input readonly="readonly" type="text" id="calle" placeholder="Calle,Sector" class="form-control">
         </div>

         <div class="col-sm-7">
           <label>Ciudad</label>
           <input readonly="readonly" id="ciudad" type="text" placeholder="Ciudad" class="form-control">
         </div>

       </div>

       <br>
      <div class="row">
          
          <div class="col-sm-5">
      
          <label for="inputState">Provincia</label>
          <input type="text" id="provincia" class="form-control">
          </div>
       
       
      
          
        
        <div class="col-sm-6">
        	
          <span>Telefono[Home/Movil]</span>
         <input type="text" readonly="readonly" id="telefono" class="form-control" placeholder="Ingresar un numero de Telefono">
        </div>
     

      </div>
     <hr>

     </div>  <!--********************card body*********************************-->
     </div> <!--********************colapsa*********************************-->
    <hr>

   </div> <!-- middle column-->

</div>







<script>
	




  $(document).ready(function(){
           
  const monthNames = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
  "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
];
 
 const dayNames = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado","Domingo"];
    

       var cita = <?php echo json_encode($cita)?>;
       const d = new Date(cita[0]['fecha_cita']);

       const n = new Date(cita[0]['fecha_nac']);
        
        console.log(d.getDay());
       
       $('#nombre').val(cita[0]['Paciente']);
       $('#fecha_cita').val(dayNames[d.getDay()]+" "+d.getDate()+" de "+monthNames[d.getMonth()]+" "+d.getFullYear());
       $('#hora_inicio').val(cita[0]['hora_inicio']);
       $('#duracion').val(cita[0]['hora_final']);
       $('#cedula').val(cita[0]['cedula']);
       $('#fecha_nac').val(n.getDate()+" de "+monthNames[n.getMonth()]+" "+n.getFullYear());
       $('#email').val(cita[0]['email']);
       $('#tipo_sangre').val(cita[0]['tipo_sangre']);
       $('#genero').val(cita[0]['genero']);
       $('#doctor').val(cita[0]['title']);
       $('#calle').val(cita[0]['calle']);
       $('#ciudad').val(cita[0]['ciudad']);
       $('#provincia').val(cita[0]['provincia']);
       $('#telefono').val(cita[0]['telefono']);
       




  });





</script>