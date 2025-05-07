<?php

for ($i = 1; $i <= 5; $i++) {
    echo "funciona $i <br>";
}

$contador = 1;
while ($contador <= 5) {
    echo "contando: $contador <br>";
    $contador++;
}

$nomes = ["Adenilsa", "Carlos", "Gustavo","Gabriel"];


foreach($nomes as $n){
    echo "ola, $n! <br>";
}

/*
for ($i = 0; $i < count($nomes); $i++){
    echo "ola, $nomes[$i]! <br>";
}
*/