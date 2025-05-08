<?php

$nome = $_GET['nome'];
$preco = $_GET['preco'];
$produtos = [];


function adicionarProduto($nome, $preco){
    $produtos = ['nome' => $nome, 'preco' => $preco];
    return $produtos;
}
print_r(adicionarProduto($nome, $preco));

?>