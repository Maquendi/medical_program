
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


 
 $(document).ready(function(){
   

   $('#cancel').click(function(){

     if(confirm('Seguro Quieres Cancelar?')){
        window.location.href= "<?php echo base_url('index.php/Controlador/entrar');?>";
     }
      
   });

});




function procesar()
{
   var ced = document.getElementById('campo_buscar');
       if(validate_cedula(ced))
        {
          $.ajax({
            type:'POST',
            url:'<?php echo site_url("index.php/Controlador/buscar_usuario")?>',
            data:{cedula:ced},
             success:function(result){
               
               if(result !== "false")
               {
                  console.log(JSON.parse(result));
               }else
               {
                 console.log('not found');
               }
            }
          })

        }else{
          document.getElementById('mensaje').innerHTML = "Usuario No Encontrado.";
        }
}
