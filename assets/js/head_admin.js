
	$(document).ready(function(){

		$('#toggle-menu').click(function(e){
            
            e.preventDefault();
            $('#wrapper').toggleClass("menuDisplayed");
		});

	});








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





