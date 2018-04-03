 

 var btn_modal = document.getElementById('btn_modal');
 $(document).ready(function(){
    $('#btn_buscar').click(function(){
       
     var cedula = document.getElementById('cedula').value;
     
     if(validate_cedula(cedula)){
        

       $.ajax({
          type:'POST',
          url:"<?php echo site_url('Controlador/buscar_paciente');?>",
          data:{ced:cedula},
          success: function(result){

             if(result == 'not found'){
               $('#div_mensaje').html("La cedula No Esta Registrada");
               document.getElementById('c_cedula').value=cedula;
               $('#a_registrar').attr('style','display:block');
               click_btn(btn_modal);
             }else{

                     getData(JSON.parse(result));
                     document.getElementById('info').value=cedula;
                     //btnColapse 
                     btn_colapse = document.getElementById('btnColapse');
                     click_btn(btn_colapse);
                     window.scrollTo(0,document.body.scrollHeight+25);
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
          $('#div_mensaje').html("La Cedula No tiene el formato adecuado. Intente de Nuevo. <hr>ejemplo [ 000-0000000-0 ]");
          $('#a_registrar').attr('style','display:none');
         }
         click_btn(btn_modal);
      }

    })
 })
   
   function click_btn(btn){
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
     var c_cedula = document.getElementById('c_cedula');
     var c_telefono = document.getElementById('c_telefono');
     var c_provincia = document.getElementById('provincia');


     c_cedula.value = datos[0]['cedula'];
     c_nombre.value = datos[0]['nombre'];
      c_apellido.value = datos[0]['apellido'];
       c_fecha_nac.value = datos[0]['fecha_nac'];
        c_email.value = datos[0]['email'];
         c_telefono.value=datos[0]['telefono'];
         c_tipo_sangre.value = datos[0]['tipo_sangre'];
          c_genero.value = datos[0]['genero'];
           c_calle.value = datos[1]['calle'];
           c_ciudad.value = datos[1]['ciudad'];
           c_provincia.value = datos[1]['provincia'];

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


var info = document.getElementById('info');

function setEditable(){
  
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
     var c_provincia = document.getElementById('provincia');
     var c_telefono = document.getElementById('c_telefono');


     c_nombre.removeAttribute("readonly");
     c_apellido.removeAttribute("readonly");
     c_fecha_nac.removeAttribute("readonly");
     c_tipo_sangre.removeAttribute("readonly");
     c_medico.removeAttribute("readonly");
     c_calle.removeAttribute("readonly");
     c_ciudad.removeAttribute("readonly");
     c_email.removeAttribute("readonly");
     c_genero.removeAttribute("readonly");
     c_provincia.removeAttribute("readonly");
     c_telefono.removeAttribute("readonly");

     if(info.value.includes("edited")==false){
        info.value +="edited";
     }
    window.scrollTo(0,225);
}


$(document).ready(function(){
  
  $('#a_registrar').click(function(){
     setEditable();
  });
});


 var table = document.getElementById('table');
 var rIndex;

 
 
 $(document).ready(function(){
   var count =0;
    for(var i=0;i<table.rows.length;i++)
    {
       table.rows[i].onclick = function(){
        rIndex = this.rowIndex;
        var texto = table.rows[rIndex].cells[0].childNodes[1].innerHTML;
        var txt="";
         
        for(var j = 0; j < texto.length; j++)
        {
           if(texto[j] !== " ")
           {  
             txt += texto[j];
           }
        }

         
         var nuevo = txt.split("-");
         
            console.log();
            var str = nuevo[2];
            var numero="";

          for(var h=0;h<str.length;h++)
          {
             if(isNumeric(str[h]))
             {
               numero += str[h];
             }
          }
            
         console.log(numero);
      }
    }

 });


