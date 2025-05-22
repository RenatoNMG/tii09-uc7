<?php

require_once 'PizzaDAO.php';

if(!isset($_GET['id'])){
    echo "ID da pizza não fornecido";
    exit();
}

$dao = new PizzaDAO();
$pizza = $dao->getByid($_GET['id']);

if(!$pizza){
    echo "pizza não encontrada no sistema";
}

$dao->delete($pizza->getId());

header("Location: index.php");
exit();

?>