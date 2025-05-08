<?php

$produtos = [
    ["nome" => "Pão", "preco" => 1.50],
    ["nome" => "Café", "preco" => 3.00],
    ["nome" => "Leite", "preco" => 4.80],
    ["nome" => "Cibalena", "preco" => 0.80],
    ["nome" => "Arroz", "preco" => 6.90],
    ["nome" => "Feijão", "preco" => 7.50],
    ["nome" => "Açúcar", "preco" => 3.20],
    ["nome" => "Sal", "preco" => 2.00],
    ["nome" => "Óleo", "preco" => 5.70],
    ["nome" => "Macarrão", "preco" => 4.10],
    ["nome" => "Queijo", "preco" => 12.30],
    ["nome" => "Presunto", "preco" => 10.90],
    ["nome" => "Biscoito", "preco" => 2.80],
    ["nome" => "Refrigerante", "preco" => 6.50]
];


function calcularTotalProdutos(array $itens): float{
    $total = 0;
    foreach ($itens as $item) {
        $total += $item['preco'];
    }
    return $total;
}




function menorPreco(array $itens): float{
    $menorPreco = $itens[0];

    foreach ($itens as $item) {

        if ($item['preco'] < $menorPreco) {
            $menorPreco = $item['preco'];
        }
    }

    return $menorPreco;
}




echo "Total: R$  " . number_format(calcularTotalProdutos($produtos), 2, ',', '.') . "<br>";
echo "o menor Preço é: R$" . number_format(menorPreco($produtos), 2, ',', '.') . "<br>";;
