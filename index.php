<?php
require './ConexionBD/Conexion.php';
$conecta = new Conexion();
$sql = "DROP TABLE countries";
$stmn = $conecta->conectar()->prepare($sql);
$stmn->execute();
echo "Cree la tabla mi amor";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Buscar</title>
        
    </head>
    <body>
        <h1>Hola</h1>
    </body>
</html>
