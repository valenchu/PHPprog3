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
$(function () {
    $("#btnClear").click(function () {
        var n = 0;
        $("#tabla tbody tr").each(function ()
        {
            n++;
        });
        for (i = n - 1; i > 1; i--)
        {
            $("#tabla tbody tr:eq('" + i + "')").remove();
        }
        ;
    });
});
//Busqueda por fecha desde
$(document).ready(function(){
	//detecto si mis fechas han cambiado si cambian se activa
	//la funcion
	$("#dateDesde").on('change',function(){
		var desde = $("#dateDesde").val();
		var hasta = $("#dateHasta").val();
		var url = 'ConsultasBD/BuscarxFecha.php';
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: 'desde='+desde+'&hasta='+hasta,
                    success: function (datos) {
                       $('#tabla').html(datos);
                       console.log(datos);
                       
            }
                    
                    
                });
                return false; 
	});
        	$("#dateHasta").on('change',function(){
		var desde = $("#dateDesde").val();
		var hasta = $("#dateHasta").val();
		var url = 'ConsultasBD/BuscarxFecha.php';
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: 'desde='+desde+'&hasta='+hasta,
                    success: function (datos) {
                       $('#tabla').html(datos);
                       console.log(datos);
            }
                    
                    
                });	
               return false; 
	});
});
//Busqueda por producto
$(document).ready(function(){
    $('#btnEnviar').click(function (){
        
        var url = 'ConsultasBD/BuscarProducto.php';
        var texto = $('#cajaTexto').val();
       $.ajax({
            type: 'POST',
            url: url,      
            data: 'texto='+texto,
            dataType: 'html',
            success: function (producto) {
                $('#tabla').html(producto);
                console.log(producto);
            }
           
           
       });
   
       return false; 
    });
    
    
    
});

//Busqueda por fecha hasta

	//detecto si mis fechas han cambiado si cambian se activa
	//la funcion
			



    




