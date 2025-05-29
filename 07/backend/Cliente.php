<?php

class Cliente
{

    private ?int $id;
    private string $nome;
    private string $cpf;
    private bool $ativo;
    private string $dataDeNascimento;
  

    public function __construct(
        ?int $id,
        string $nome,
        string $cpf,
        string $dataDeNascimento,
        bool $ativo
    ) {
        $this->id = $id;
        $this->nome =  $nome;
        $this->cpf =  $cpf;
        $this->dataDeNascimento = $dataDeNascimento;
        $this->ativo =  $ativo;
        
  
    }

    // Getters
    public function getId(): ?int { return $this->id; }
    public function getNome(): string { return $this->nome; }
    public function getCpf(): string { return $this->cpf; }
    public function getAtivo(): bool { return $this->ativo; }
    public function getdataDeNascimento(): int { return $this->dataDeNascimento; }
  // setters

    public function setNome(string $nome)  {  $this->nome = $nome; }
    public function setCpf(string $cpf)  {  $this->cpf = $cpf; }
    public function setAtivo(bool $ativo) { $this->ativo = $ativo; }
    public function setdataDeNascimento(string $dataDeNascimento){ $this->dataDeNascimento = $dataDeNascimento; }
  
    
}
