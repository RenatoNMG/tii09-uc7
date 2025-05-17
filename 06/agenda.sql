-- Cria o Banco
CREATE DATABASE IF NOT EXISTS agenda;
USE agenda;
 
 -- Cria a tabela de contatos
CREATE TABLE IF NOT EXISTS contatos (
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    email VARCHAR(100) NOT NULL,
    endereco VARCHAR(255)
);