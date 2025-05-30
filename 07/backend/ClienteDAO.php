
<?php

require_once "Database.php";


class ClienteDAO{

private $db;

public function __construct()
{
    $this->db = Database::getInstance();
    
}

public function getAll() :array{
    $stmt = $this->db->query("SELECT * FROM clientes");
    $clientes = [];

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $clientes[] = new Cliente(
            $row['id'],
            $row['nome'],
            $row['cpf'],
            $row['dataDeNascimento'],
            $row['ativo']
        );

    }

    return $clientes;

}


public function getById(int $id){
    $stmt = $this->db->prepare("SELECT * FROM clientes id = :id");
    $stmt->execute([':id' => $id]);
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return new Cliente(
        $row['id'],
        $row['nome'],
        $row['cpf'],
        $row['ativo'],
        $row['dataDeNascimento']
    );


}

public function delete(int $id)
{
    $stmt = $this->db->prepare("DELETE * FROM clientes WHERE id = :id");
    $stmt->execute([':id' => $id]);

}






}
?>