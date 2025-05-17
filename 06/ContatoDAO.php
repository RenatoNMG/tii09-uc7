<?php


require_once 'Database.php';
require_once 'Contato.php';

class ContatoDAO{

    private $db; // usa em todas as funçoes

    public function __construct(){
        $this->db = Database::getInstance();// uma instancia do banco de dados
        
    }


    public function getAll(){
        $stmt = $this->db->query("SELECT * FROM contatos");
        $contatos = []; // inicia um array vazio

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $contatos[] = new Contato($row['id'],$row['nome'],$row['telefone'],$row['email'],$row['endereco']);
        }
        return $contatos;
    }

    public function getById(int $id) : ?Contato{

       
        $stmt = $this->db->prepare("SELECT * FROM contatos WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row? new Contato(
            $row['id'], 
            $row['nome'], 
            $row['telefone'],
             $row['email'], 
             $row['endereco'])
             :null;

    }

    public function create(Contato $contato){

        $stmt = $this->db->prepare("INSERT INTO contatos (nome,telefone,email,endereco) VALUES 
        (:nome, :telefone, :email, :endereco)");

$nome = $contato->getNome();
$telefone = $contato->getTelefone();
$email = $contato->getEmail();
$endereco = $contato->getEndereco();

$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':telefone', $telefone);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':endereco', $endereco);
$stmt->execute();
    }


}



?>