<?php


require_once 'Database.php';
require_once 'Contato.php';

class ContatoDAO{

    private $db; // usa em todas as funçoes

    public function __construct(){
        $this->db = Database::getInstance();// uma instancia do banco de dados
        
    }


    public function getAll(){
        $stmt = $this->db->query("SELECT * FROM contato");
        $contatos = []; // inicia um array vazio

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $contatos[] = new Contato($row['id'],$row['nome']);
        }
        return $contatos;
    }

    public function create(Contato $contato){

        $stmt = $this->db->prepare("INSERT INTO contato (nome) VALUES (:nome)");

        $nome = $contato->getNome();

        $stmt->bindParam(':nome' , $nome);

        $stmt->execute();

    }


}





?>