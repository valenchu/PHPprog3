<html>

<head>
	<link rel="stylesheet" href="css/estiloWeb.css" type="text/css" media="all">
	<script src="validaciones/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="validaciones/validaDos.js"></script>
	<meta charset="UTF-8">
	<title>Buscar</title>

</head>

<body>
	<div id="tituloCabecera">
		<h1>Buscar movimientos de ventas</h1>
	</div>
	
	<div id="Formulario">
		<label id="la">Por producto</label>
		<form id="formulario" method="post">
			<input type="submit" id="btnEnviar" value="Buscar" title="Buscar"/>
			<input type="text" id="cajaTexto" name="s" onkeypress="letrasNum(e)"/>
			<input type="date" id="dateDesde"/>
			<input type="date" id="dateHasta"/>
	</div>
		<div>
		<button type="button" id="btnClear">Restaurar tabla</button>
		</div>

	<div id="tbl">



		<table id="tabla">
			<div id=tomar ">
            <tr id ="tituloFilas ">   
                <th>ID Venta</td>
                <th>Usuario</th>
                <th>ID Producto</th>
                <th>Detalle</th>
                <th>Fecha</th>
                <th>PrecioSIVA</th>
                <th>Cantidad</th>
                <th>Oferta</th>
                <th>Importe</th>    
            </tr>
            </div>
            <tr id="idvta "><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
            <?php
           
            
           
            
           require_once './resultado2.php';
            ejecutar();
            
            ?>
         
        </table>
        </div>
            <div id="respAjax "></div>
            
       
    </body>
</html>