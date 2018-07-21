<?php
require_once "./ConexionBD/Conexion.php"; 

class Buscador
{
    private $busqueda=array();
    private $texto = "";
    public function buscar()
    {
        $c = new Conexion();
        
        $busqueda = $_POST['s'];
        
        
       if(empty($busqueda)){
       }else{
        //consulta con like y el motor innodb
        $sql = "SELECT  venta.idVenta, venta.Usuario,detallevta.IDproducto, "
                        . "detallevta.Descripcion, detallevta.Fecha, detallevta.Cant, "
                        . "detallevta.PrecioSIVA, detallevta.oferta,detallevta.Importe "
                        . "FROM detallevta INNER JOIN  venta ON venta.idVenta = detallevta.idVenta "
                        . "WHERE (detallevta.Descripcion LIKE '" . $busqueda . "%')"
                        . " LIMIT 30";
        $res = $c->conectar()->prepare($sql);
        $res->execute();
        while ($reg =$res->fetch(PDO::FETCH_ASSOC))
        {
            $this->busqueda[] = $reg;
        }
      
        return $this->busqueda;
    }
    return $this->busqueda;
    }
}

class buscador2{
function buscarYa(){
    $c = new Conexion();
    $sql = "SELECT  venta.idVenta, venta.Usuario,detallevta.IDproducto, "
                        . "detallevta.Descripcion, detallevta.Fecha, detallevta.Cant, "
                        . "detallevta.PrecioSIVA, detallevta.oferta,detallevta.Importe "
                        . "FROM detallevta INNER JOIN  venta ON venta.idVenta = detallevta.idVenta "
                        
                        . " LIMIT 30";
        $res = $c->conectar()->prepare($sql);
        $res->execute();
        while ($reg =$res->fetch(PDO::FETCH_ASSOC))
        {
            echo "<tr>"."<td>".$reg["idVenta"]."</td>"."<td>".$reg["Usuario"]."</td>"
                    ."<td>".$reg["IDproducto"]."</td>"."<td>".$reg["Descripcion"]."</td>"
                    ."<td>".$reg["Fecha"]."</td>"."<td>".$reg["PrecioSIVA"]."</td>"
                    ."<td>".$reg["Cant"]."</td>"."<td>".$reg["oferta"]."</td>"
                    ."<td>".$reg["Importe"]."</td>".
            
            
            "</tr>";
        }
}
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

