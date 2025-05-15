<?php

require 'PizzaDAO.php';

$bd = new PizzaDAO();
$pizzas = $bd->getALL();




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de pizzas</title>
</head>
<body>
    <h2>Lista de Pizzas</h2>
    <table border="1" cellpading="5">
        <tr><th>NOME</th><th>TAMANHO</th><th>PREÇO</th></tr>
        <?php foreach($pizzas as $p): ?>
            <tr>
                <td><?= $p->getSabor() ?></td>
                <td><?= $p->getTamanho() ?></td>
                <td><?= $p->getPreco() ?></td>
            </tr>
        <?php endforeach; ?>


    </table>


    <a href="pizza_form.php">Cadastrar Nova</a>
    
</body>
</html>