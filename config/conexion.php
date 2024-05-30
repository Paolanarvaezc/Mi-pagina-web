<?php 
session_start();
class Conectar{
    protected $dbh;
    protected function Conexion(){
        try{
            /*$conectar = $this->dbh=new PDO("mysql:host=localhost:3306;dbname=proyecto","root","");*/
            $conectar = $this->dbh=new PDO("mysql:local=localhost;dbname=proyecto","root","");
            return $conectar;
        } catch(Exception $e) {
            print "¡Error BD!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    public function set_names(){
        return $this->dbh->query("SET NAMES 'utf8'");
    }
    public static function ruta(){
        //QA
        /*return "http://localhost:80/Mi-pagina-web/";*/
        return "http://localhost/Mi-pagina-web/";
    }
}

?>