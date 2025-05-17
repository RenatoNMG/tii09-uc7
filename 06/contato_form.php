<?php

require_once 'ContatoDAO.php';
$dao = new ContatoDAO();

if (isset($_POST['nome']) && isset($_POST['telefone']) && isset($_POST['email']) && isset($_POST['endereco'])){

    $endereco = null;
    if(isset($_POST['endereco'])){
        $endereco = $_POST['endereco'];
    }


    $contato = New Contato(null,$_POST['nome'],$_POST['telefone'],$_POST['email'],$_POST['endereco']);
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

        <label>Telefone:</label>
        <input type="text" name="telefone" require>

        <label>Email:</label>
        <input type="text" name="email" require>

        <label>Emdereço:</label>
        <input type="text" name="endereco">

        <button type="submit">Salvar</button>

    </form>
    
</body>
</html>