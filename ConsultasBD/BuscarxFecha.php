<?php
require_once '../ConexionBD/Conexion.php';

$desde= $_POST['desde'];
$hasta= $_POST['hasta'];

//COMPROBAMOS QUE LAS FECHAS EXISTAN
if(isset($desde)==false){
	$desde = $hasta;
}

if(isset($hasta)==false){
	$hasta = $desde;
}

    $c = new Conexion();

    $sql = "SELECT  venta.idVenta, venta.Usuario,detallevta.IDproducto, "
                        . "detallevta.Descripcion, detallevta.Fecha, detallevta.Cant, "
                        . "detallevta.PrecioSIVA, detallevta.oferta,detallevta.Importe "
                        . "FROM venta INNER JOIN  detallevta ON venta.idVenta = detallevta.idVenta"
                        . " WHERE (detallevta.Fecha BETWEEN '$desde' AND '$hasta') ";
            
    
    $stmn = $c->conectar()->prepare($sql);
    $stmn->execute();
    if($stmn->rowCount()>0){
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
    
    


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

