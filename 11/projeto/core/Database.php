<?php

class Database{


     public static function getInstance(){

        $sbhost = "localhost";
        $dbname = "venda";
        $sbuser = "root";
        $dbpass = "";
        
        try{
        $pdo = new PDO("mysql:host={$sbhost};dbname=$dbname;", $sbuser, $dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;

        }catch(PDOException $e){
            echo $e->getMessage() . "erro de conexão com banco";

        }
        

    }
}
?>