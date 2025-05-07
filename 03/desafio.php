<table border="1">
    <th>Nome</th> 
    <th>CPF</th>
    <th>Cidade</th>

    <?php
    $clientes = [
        [
            "nome" => "Renato",
            "cpf" => "11122255566",
            "cidade" => "sao paulo"
        ],
        [
            "nome" => "maria",
            "cpf" => "45454544",
            "cidade" => "ferraz de vasconcelos"

        ],
        [
            "nome" => "Renato",
            "cpf" => "11122255566",
            "cidade" => "mogi"

        ]



    ];

    foreach ($clientes as $cliente) {
        echo "<tr> <td>" .$cliente['nome']. "</td>";
        echo " <td>" .$cliente['cpf']. "</td>";
        echo " <td>" .$cliente['cidade']. "</td> </tr>";
    }


    ?>

</table>