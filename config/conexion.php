<?php

class conectar{
    protected $dbh;
    protected function conexion(){
        try{
            $conectar=$this->dbh=new PDO("mysql:local=localhost;dbname=php1","root","");
            return $conectar;
        }catch(Exception $e){
            print "Conexion Fallida".$e->getMessage()."<br>";
            die();
        }
    }
}
