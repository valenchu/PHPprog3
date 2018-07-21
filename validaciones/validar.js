//validar solo letras y numeros
$("#cajaTexto").bind('keypress', function letrasNum(event) {
  var regex = new RegExp("^[a-zA-Z0-9 ]+$");
  var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
  if (!regex.test(key)) {
    event.preventDefault();
    return false;
 }
});

  //Elimina las filas de la tabla
  $(function (){
     $("#btnClear").click(function (){
         var n=0;
$("#tabla tbody tr").each(function () 
{
n++;
});
for(i=n-1;i>=1;i--)
{
$("#tabla tbody tr:eq('"+i+"')").remove();
};
         
     });
      
      
      
  });

  //Creo funcion para tomar caja de texto
$(document).ready(function tomarvalor(){
    //Tomo el texto de la caja de texto y la instacio en parmetros;
   $("#btnEnviar").click(function (){
       
        texto = $("#cajaTexto").val();
   
    
 $.ajax({
        data: {"texto":texto},
        url: "ConsultasBD/Prueba.php",
        type: 'POST',
        
        success: function (response) {
            $("busc").html(response);
        }
        
    
});
});
});


 

  
  //Para insertar en campos de textos Solo letras =
  //required onkeypress="return soloLetras(event);" onkeyup="this.value = this.value.charAt(0).toUpperCase() + this.value.slice(1);" class="mayusculas" maxlength="15" "
  //Para solo numeros =
  //onKeyPress="return SoloNumeros(event); "