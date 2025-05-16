<?php

require_once 'ContatoDAO.php';
$dao = new ContatoDAO();

if (isset($_POST['nome'])){

    $contato = New Contato(null,$_POST['nome']);
    $dao->create($contato);

    header("location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Contato</title>
</head>
<body>
    <h2>Cadastrar Novo Cliente</h2>

    <form action="contato_form.php" method="post">
        <label>Nome:</label>
        <input type="text" name="nome" require>

        <button type="submit">Salvar</button>

    </form>
    
</body>
</html>