<html>

    <head>
        <link rel="stylesheet" href="css/estiloWeb.css" type="text/css" media="all">
        <script src="validaciones/jquery-3.3.1.js"></script>

        <meta charset="UTF-8">
        <title>Buscar</title>

    </head>

    <body>
       
        <div id="tituloCabecera">
            <h1>Busqueda de movimientos en ventas</h1>
        </div>
        
        
        <label >Por producto:</label> <label id="desde">Fecha desde:</label><label id="hasta">Fecha hasta:</label>
        <div id="Formulario">    
            
                <input type="button" id="btnEnviar" value="Buscar" title="Buscar" />

                <input type="text" id="cajaTexto"  autocomplete="off" onkeypress="letrasNum(e)" /><input  type="date" id="dateDesde"/>
            <input type="date" id="dateHasta"/>
                <div id="fechas">

            
        </div>
        </div>
        
        
        <div id="bononborrar">
            <button type="button" id="btnClear">Restaurar tabla</button>
        </div>
        <div id="tbl">
            <table id="tabla">

                <tr id ="tituloFilas ">   
                    <th>ID Venta</td>
                    <th>Usuario</th>
                    <th>ID Producto</th>
                    <th id="detalle">Detalle</th>
                    <th>Fecha</th>
                    <th>PrecioSIVA</th>
                    <th>Cantidad</th>
                    <th>Oferta</th>
                    <th>Importe</th>    
                </tr>
                <tr></tr>               
            </table>
        </div>
        <div id="respAjax "></div>
        <script  src="validaciones/validaDos.js"></script>

    </body>
</html>