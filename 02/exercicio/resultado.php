<?php

$n1 = (float)$_GET['n1'];
$n2 = (float)$_GET['n2'];
$n3 = (float)$_GET['n3'];
$n4 = (float)$_GET['n4'];


$media = ($n1 + $n2 + $n3 + $n4) /4;

switch($media){
    case $media >= 7:
        echo "aprovado";
        break;
    case $media >= 5;
        echo "Recuperação";
        break;
    default:
        echo "reprovado";
        break;

};

echo "<br>" . $media;

?>