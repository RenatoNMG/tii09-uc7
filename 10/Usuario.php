<?php

class Usuario{
    private ?int $id;
    private string $nome;
    private string $senha;
    private string $email;
    private ?string $token;
    
    
    public function __construct(?int $id,
    string $nome,
    string $senha,
    string $email,
    ?string $token = null){
  
      $this->id = $id;
      $this->nome = $nome;
      $this->senha = $senha;
      $this->email = $email;
      $this->token = $token;
    }



    public function getId(){return $this->id;}
    public function getNome(){return $this->nome;}
    public function getSenha(){return $this->senha;}
    public function getEmail(){return $this->email;}
    public function getToken(){return $this->token;}
}

$senha = $_GET['senha'];
$senha_cript = password_hash($senha, PASSWORD_DEFAULT);


$token = bin2hex(random_bytes(25));


echo $token;




?>