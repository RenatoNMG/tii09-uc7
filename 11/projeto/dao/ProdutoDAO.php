<?php

use produtoDAO as GlobalProdutoDAO;

require_once "../core/Database.php";
require_once "../model/Produto.php";
class ProdutoDAO
{

    private PDO $dao;

    function __construct()
    {
        $this->dao = Database::getInstance();
    }

    public function getAll(): array
    {
        $stmt = $this->dao->query("SELECT * FROM produtos;");
        $date = $stmt->fetchAll();
        $produto = [];
        foreach ($date as $pro) {
           $produto[] = ProdutoDAO::ChamarProduto($pro);
        }
        return $produto;
    }





    public function getByid(int $id)
    {
        $stmt = $this->dao->prepare("SELECT * FROM produtos WHERE id = :id;");
        $stmt->execute([':id' => $id]);
        $pro = $stmt->fetch();
        return ProdutoDAO::ChamarProduto($pro);
    }




    public function creat(Produto $produto){

    }





    static function ChamarProduto(array $pro)
    {
        return new Produto(
            $pro['id'],
            $pro['nome'],
            $pro['preco'],
            $pro['ativo'],
            $pro['dataDeCadastro'],
            $pro['dataDeValidade']
        );
    }
}

$teste = new ProdutoDAO();

echo "<pre>";
print_r($teste->getAll());
echo "</pre>";
