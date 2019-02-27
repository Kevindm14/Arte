<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

    class Conexion{
        private $host = "localhost";
        private $dbname = "userdata";
        private $user = "root";
        private $password = "localhost";
        private $conexion = null;
        public function getConexion(){
            try{
                $this->conexion = new PDO("mysql:host=$this->host; dbname=$this->dbname", $this->user, $this->password);
                $this->conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //reporte de errores y excepciones
                $this->conexion->exec("SET CHARACTER SET utf8");
                return $this->conexion;
            }catch(Exception $error){
                echo "Error ".$errores->getMessage();
            }finally{
                $this->conexion = null;
            }
        } 
    }
?>