<?php
         
      
        
//COMPROBAMOS SI HAY REGISTROS EN LA BUSQUEDA, SI NO LOS HAY, MOSATRAMOS UN MENSAJE DICIENDO QUE NO HAY RESULTADOS, EN OTRO CASO, MOSTRAMOS LOS RESULTADOS
      function ejecutar(){
           require_once  "ConsultasBD/class.php";
    
    $bus = new Buscador();
    $buscame = $bus->buscar();  
         if (count($buscame) == 0){
            
            echo "<h2>No hay resultados para su búsqueda...</h2>";
        }else{
            for($i=0;$i<sizeof($buscame);$i++)
            {
                ?>
<div id="dviClear">
                <tr id="tblClear">
                    <td align="center">
                        <?php echo $buscame[$i]["idVenta"] ?>
                    </td>
                    <td align="center">
                        <?php echo $buscame[$i]["Usuario"] ?>
                    </td>
                    <td align="center">
                        <?php echo $buscame[$i]["IDproducto"] ?>
                    </td>
                    <td align="center">
                        <?php echo $buscame[$i]["Descripcion"] ?>
                    </td>
                    <td align="center">
                        <?php echo $buscame[$i]["Fecha"] ?>
                    </td>
                    <td align="center">
                        <?php echo $buscame[$i]["PrecioSIVA"] ?>
                    </td>
                    <td align="center">
                        <?php echo $buscame[$i]["Cant"] ?>
                    </td>
                    <td align="center">
                        <?php echo $buscame[$i]["oferta"] ?>
                    </td>
                    <td align="center">
                        <?php echo $buscame[$i]["Importe"] ?>
                    </td>
                    
                </tr>
</div>
                <?php
            }
        }
      }
      
      
        