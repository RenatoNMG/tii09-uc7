<?php
require 'Pizza.php';

class Database {

    private string $host = 'localhost';
    private string $dbname = 'pizzaria_senac';
    private string $user = 'root';
    private string $pass = '';


 

    public function getALL(){

        $db = new PDO("mysql:host=localhost;dbname=pizzaria_senac",'root','');
        $stmt = $db->query("SELECT * FROM pizza");

        $pizzas = [];

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

               $pizzas[] = new Pizza(
                $row['sabor'],
                $row['tamanho'],
                $row['preco']
            );

        }





        return $pizzas;


    }



}


?>