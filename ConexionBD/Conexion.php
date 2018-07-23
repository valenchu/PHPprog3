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
        //Atributos para la conexion pdo
         $options = array(
             //Conexion persistente
            PDO::ATTR_PERSISTENT => true, 
             //Emula las secuencias sql
            PDO::ATTR_EMULATE_PREPARES => false, 
             //Mensajes de error
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
             //Instancio en el lenguaje que me muevo español ;
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
        );
        try {
            //Me conecto a la BD ; le paso los datos
            $con = new PDO('mysql:host=' . $this->host . '; dbname=' . $this->dbnombre, $this->usuario, $this->contraseña);
           //Instancio los atributos de opciones creados mas arriba
            $con->setAttribute( $options) ;
            
            //Devulevo variable de conectado verdadero
            $this->isConnected = true ; 
            
            return $con;
        } catch (PDOException $e) {
            print "Error en la conexión!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    //Me desconecto de la BD
     function desconectar(){
       $con = null;
       
    }
    function fechaEspanol($fecha){
        $formatearFecha = date('d/m/Y', strtotime($fecha));
        return $formatearFecha;
    }
}
