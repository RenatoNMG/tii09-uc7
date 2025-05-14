<?php

require 'database.php';

$meuBancoDeDados = new Database();
echo "<pre>";
print_r($meuBancoDeDados->getALL());
echo "</pre>";


?>