<?php

function probar (){
            $c = new Conexion();
        $busc = array();
        if(isset($_POST["texto"])){
       
        
       
       
        //consulta con like y el motor innodb
        $sql = "SELECT  venta.idVenta, venta.Usuario,detallevta.IDproducto, "
                        . "detallevta.Descripcion, detallevta.Fecha, detallevta.Cant, "
                        . "detallevta.PrecioSIVA, detallevta.oferta,detallevta.Importe "
                        . "FROM detallevta INNER JOIN  venta ON venta.idVenta = detallevta.idVenta "
                        . "WHERE (detallevta.Descripcion LIKE '" . $_POST["texto"] . "%')"
                        . " LIMIT 30";
        $res = $c->conectar()->prepare($sql);
        $res->execute();
        while ($reg =$res->fetch(PDO::FETCH_ASSOC))
        {
            $busc[] = $reg;
        }
      
       
    
     return $busc;
        }else{
            echo 'Error';
        }
}
 


