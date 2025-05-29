<?php

require_once "../backend/produtoDAO.php";
$dao = new produtoDAO();

if(!isset($_GET['id'])){
    header("Location: ../index.php");
    exit();
}

$produto = $dao->getById($_GET['id']);

if(!$produto){
    echo "produto não encontrado";
    echo "<a href='../index.php'>Voltar</a>";
    exit;
}


?>
<link rel="stylesheet" href="../styles/styles.css">
<h2>Detalhes do Produto</h2>

<ul>
    <li><strong>ID: </strong><?= $produto->getId();?></li>
    <li><strong>Nome: </strong><?= $produto->getNome();?></li>
    <li><strong>Preço: </strong><?= $produto->getPreco();?></li>
    <li><strong>Ativo </strong><?= $produto->getAtivo()? 'SIm' : 'Não';?></li>
    <li><strong>Data de Cadatro </strong><?= $produto->getDataDeCadastro();?></li>
    <li><strong>Data de Validade </strong><?= $produto->getDataDeValidade();?></li>
</ul>