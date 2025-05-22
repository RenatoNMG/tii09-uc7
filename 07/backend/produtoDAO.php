<?php


require_once "Produto.php";
require_once "Database.php.php";
class produtoDAO{
    private $db;


    public function __construct()
    {
        $this->db = produtoDAO::getInstance();
    }

    public function getAll() : array{

        return [];
    }

    public function getById(): ?Produto{

        return null;

    }

    public function create(Produto $produto): void{

    }

    public function createInseguro(Produto $produto): void
    {
        $sql = "INSERT INTO produtos (nome, preco, ativo, dataDeCadastro, dataDeValidade) VALUES
                ({$produto->getNome()}, 
                {$produto->getPreco()}, 
                {$produto->getAtivo()},
                {$produto->getDataDeCadastro()}, 
                {$produto->getDataDeValidade()})";
        
        $this->db->query($sql);
    }

    public function update(Produto $produto): void{

    }

    public function delete(int $id) : void{

    }
}

?>
