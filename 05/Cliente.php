<?php

/*
Propriedades: nome, veiculo, telefone (todos private string)
Construtor que recebe todas as propreidades
Sobrescreva __toString() para visualizarmos os dados
Crie um get para o "nome" e um set para o "telefone"
*/

class Cliente{

    private string $nome;
    private string $veiculo;
    private string $telefone;

    public  function __construct(string $nome,string $veiculo,string $telefone) {
        $this->nome = $nome;
        $this->veiculo = $veiculo;
        $this->telefone = $telefone;
    }

    public function getNome() : string{
        return $this->nome;

    }

    public function setTelefone(string $telefone){
        $this->telefone = $telefone; 

    }

    public function __toString() : string{
        return "Nome: $this->nome, <br> Veiculo: $this->veiculo <br> telefone: $this->telefone"; 
    }

}


$cliente = new Cliente('Renato','Fusca','11988885555');
$cliente2 = new Cliente('silva','classic','119844662');

echo $cliente->setTelefone('115555 5555');

echo $cliente, "<br> <hr>", $cliente2;


?>