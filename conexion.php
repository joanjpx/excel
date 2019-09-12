<?php
class DB {
    var $host;
    var $db;
    var $user;
    var $pass;

    function Connection(){
        $this->host="10.254.12.116";
        $this->db="gilatssra2";
        $this->user="root";
        $this->pass="123456*abc";
        //return $this;
    }

    function Connect(){

        $this->Connection();
        ##return var_dump($this);
        $enlace = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
        
        if($enlace){
            //echo "Conexion Exitosa";
        }else{
            die('Error de Conexion:'.mysqli_connect_errno().'||'.mysqli_connect_error());
        }

        return $enlace;
    }
}
?>