<?php

$salario = $_GET['salario'];




if ($salario <= 1518) {

    $salarioComDesconto = $salario * 0.07;
    $desconto = $salario - $salarioComDesconto;
    echo "
      Desconto de: 0.7% <br>  
      salario: $salario <br>
      desconto: $desconto <br>
      com desconto: $salarioComDesconto
      ";
} elseif ($salario <= 2793) {
    $salarioComDesconto = $salario * 0.09;
    $desconto = $salario - $salarioComDesconto;
    echo "
      Desconto de: 0.9% <br>  
      salario: $salario <br>
      desconto: $desconto <br>
      com desconto: $salarioComDesconto
      ";
} elseif ($salario <= 4190) {
    $salarioComDesconto = $salario * 0.12;
    $desconto = $salario - $salarioComDesconto;
    echo "
      Desconto de: 0.12% <br>  
      salario: $salario <br>
      desconto: $desconto <br>
      com desconto: $salarioComDesconto
      ";
} elseif ($salario <= 8157) {
    $salarioComDesconto = $salario * 0.14;
    $desconto = $salario - $salarioComDesconto;
    echo "
      Desconto de: 0.14% <br>  
      salario: $salario <br>
      desconto: $desconto <br>
      com desconto: $salarioComDesconto
      ";
}
