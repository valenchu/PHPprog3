<?php

require "../ConexionBD/Conexion.php"; 

//Busqueda por fecha
//Traigo fechas validaDos.js
$buscar = $_POST['texto'];
echo $busqueda;




if(isset($buscar)){
    

    $c = new Conexion();

    $sql = "SELECT  venta.idVenta, venta.Usuario,detallevta.IDproducto, "
                        . "detallevta.Descripcion, detallevta.Fecha, detallevta.Cant, "
                        . "detallevta.PrecioSIVA, detallevta.oferta,detallevta.Importe "
                        . "FROM venta INNER JOIN  detallevta ON venta.idVenta = detallevta.idVenta"
                        . " WHERE detallevta.Descripcion LIKE '".$buscar."%' ";
            
    
    $stmn = $c->conectar()->prepare($sql);
    $stmn->execute();
    echo '<table class="table table-striped table-condensed table-hover">
        <tr></tr>
        	<tr>
            	<th>ID Venta</td>
                <th>Usuario</th>
                <th>ID Producto</th>
                <th id="detalle">Detalle</th>
                <th>Fecha</th>
                <th>PrecioSIVA</th>
                <th>Cantidad</th>
                <th>Oferta</th>
                <th>Importe</th>
            </tr>';
    
    if($stmn->rowCount()>0){
    while ($respuesta = $stmn->fetch()) {
        echo '<tr>'.
        '<td>'.$respuesta["idVenta"].'</td>'. '<td>'.$respuesta['Usuario'].'</td>'.
        '<td>'.$respuesta['IDproducto'].'</td>'.'<td>'.$respuesta['Descripcion'].'</td>'.
        '<td>'.$c->fechaEspanol($respuesta['Fecha']).'</td>'.'<td>'.$respuesta['PrecioSIVA'].'</td>'.
        '<td>'.$respuesta['Cant'].'</td>'.'<td>'.$respuesta['oferta'].'</td>'.
        '<td>'.$respuesta['Importe'].'</td>'.'</tr>';
        
    }
    } else {
        echo '<h2> No se encontro resultados </h2>';
    }
}else{
    echo '<h2> No se encontro resultados </h2>';
}
