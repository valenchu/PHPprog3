<?php

class Conexion {

    protected $usuario = "root";
    protected $contraseña = "1532469571";
    protected $host = "localhost";
    protected $dbnombre = "tesis";
    public $con ;
    private $isConnected = false;
  



//Me conecto a la BD
     function conectar() {
        
         $options = array(
            PDO::ATTR_PERSISTENT => true, 
            PDO::ATTR_EMULATE_PREPARES => true, 
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
        );
        try {
            $con = new PDO('mysql:host=' . $this->host . '; dbname=' . $this->dbnombre, $this->usuario, $this->contraseña);
            $con->setAttribute( $options) ;
            
            
            $this->isConnected = true ; 
            echo "Me conecte";
            return $con;
        } catch (PDOException $e) {
            print "Error en la conexión!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    //Me desconecto de la BD
     function desconectar(){
       $con = null;
       echo "Me desconecte";
    }
}
