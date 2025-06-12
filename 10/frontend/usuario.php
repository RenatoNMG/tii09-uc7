<?php

session_start();


if(!isset($$_SESSION['token'])){
    header('Location: index.php');
    exit();

}

$dao = new UsuarioDAO();
$user = $dao->getByToken($_SESSION['token']);

if(!$user){
    header('Location: login.php');
    exit();
}

?>

<h1>Minha conta</h1>

<p>nome <?php echo $usuario->getNome(); ?></p>
<p>Email <?php echo $usuario->getEmail(); ?></p>
<a href="index.php">Voltar</a>