<?php
    session_start();
    class conectar{
        protected $dbh;
        protected function conexion(){
            try{
                $conectar=$this->dbh=new PDO("mysql:local=localhost;dbname=php1","root","");
                return $conectar;
            }catch(Exception $e){
                print "Conexión Fallida".$e->getMessage()."<br>";
                die();
            }
        }
        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }
        public static function ruta(){
            //QA
            return "http://localhost/proyecto/";
        }
    }
?>


