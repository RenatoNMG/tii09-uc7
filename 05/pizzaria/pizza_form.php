<?php

require 'PizzaDAO.php';
require_once 'Pizza.php';

$dao = new PizzaDAO();

if (isset($_POST['sabor'], $_POST['tamanho'], $_POST['preco'])) {
    $sabor = $_POST['sabor'];
    $tamanho = $_POST['tamanho'];
    $preco = $_POST['preco'];

    $pizza = new Pizza($sabor, $tamanho, $preco);
    $dao->create($pizza);

    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadatrar Pizza</title>
</head>

<body>
    <h2>Cadatrar noava Pizza</h2>

    <form action="pizza_form.php" method="post">

        <label>Sabor</label>
        <input type="text" name="sabor" require>

        <label>Tamanho</label>
        <input type="text" name="tamanho" require>

        <label>Preço</label>
        <input type="number" name="preco" require>

        <button type="submit">Salvar</button>


    </form>

    <br>
    <a href="index.php">Cancelar</a>

</body>

</html>