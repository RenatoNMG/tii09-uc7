<?php

/*
Crie um formulário que recebe uma idade (inteiro)
Veriquei se idade:
- Menor que 12: Criança
- Menor que 18: Adolescente
- Menor que 60: Adulto
- Qualquer outra idade: Idoso
*/ 

$idade = (int)$_GET['idade'];

switch($idade){
    case $idade <= 12;
        echo "Criança";
        break;
    case $idade <= 18;
        echo "Adolescente";
        break;
    case $idade <= 60;
        echo "Adulto";
        break;
    default;
        echo "Idoso";
        break;
}




?>