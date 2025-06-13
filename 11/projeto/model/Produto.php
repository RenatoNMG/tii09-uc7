<?php

class Produto implements JsonSerializable{
    private ?int $id;
    private string $nome;
    private float $preco;
    private bool $ativo;
    private string $dataDeCadastro;
    private string $dataDeValidade;


    function __construct(?int $id,
    string $nome,
    float $preco,
    bool $ativo,
    string $dataDeCadastro,
    string $dataDeValidade)
    {
      $this->id = $id;
      $this->nome = $nome;
      $this->preco = $preco;
      $this->ativo = $ativo;
      $this->dataDeCadastro = $dataDeCadastro;
      $this->dataDeValidade = $dataDeValidade;
    }

    public function getId(){return $this->id;}
    public function getNome(){return $this->nome;}
    public function getPreco(){return $this->preco;}
    public function getAtivo(){return $this->ativo;}
    public function getDataDeCadastro(){return $this->dataDeCadastro;}
    public function getDataDeValidade(){return $this->dataDeValidade;}
    

    public function jsonSerialize(): mixed{
        return[
            'id' => $this->id,
            'nome' => $this->nome,
            'preco' => $this->preco,
            'ativo' => $this->ativo,
            'dataDeCadastro' => $this->dataDeCadastro,
            'dataDeValidade' => $this->dataDeValidade,
        ];
    }
    
}






?>