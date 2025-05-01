<?php

$a = 10;
$b = 5;

echo  "soma: " . $a + $b;

echo "<br> $a é maior que $b: " . ($a > $b ? "sim" : "não") . "<br>";

$idade = 17;

if($idade >= 18){
    echo "Maior de Idade $idade anos!<br>";
}else{
    echo "Menor de idade $idade anos!<br>";
}

// switch case


$dia = "domingo";

switch($dia){
    case "segunda";
        echo "inicio da semana";
        break;
    case "sexta";
        echo "Ùltimo dia da semana";
        break;
    default:
        echo "dia comum";
        break;
};

?>