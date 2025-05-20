

-- selecionar todos os produtos

SELECT * FROM produtos;



-- seleciona produtos especifico
SELECT nome,email FROM clientes


-- prosuto multiplicado por 12
SELECT produto,preco_unidade,preco_unidade * 12 AS duzia FROM produtos;

USE  loja_online;

SELECT nome,email from clientes;
SELECT produto,preco_unidade FROM produtos;
SELECT produto,preco_unidade,preco_unidade * 12 from produtos;
SELECT produto,preco_unidade,preco_unidade * 12 AS duzia FROM produtos;
SELECT 10 * 5 AS resultado;


SELECT nome, email, cidade FROM clientes ORDER BY cidade DESC, nome ASC;
SELECT * FROM encomendas ORDER BY data_hora DESC;

SELECT id, nome, email FROM clientes LIMIT 10;
SELECT id, nome, email FROM clientes ORDER BY id DESC LIMIT 10;
SELECT id, nome, email FROM clientes LIMIT 10 offset 10;
SELECT id, nome, email FROM clientes LIMIT  10, 3;

SELECT * FROM produtos ORDER BY preco_unidade DESC LIMIT 1; 

SELECT * FROM clientes WHERE cidade = "lisboa";
SELECT * FROM clientes WHERE sexo = "m" AND cidade = "lisboa";
SELECT * FROM clientes WHERE cidade <> "lisboa";
SELECT * FROM produtos WHERE preco_unidade >= 1 AND preco_unidade <= 2;

SELECT nome, email, cidade, sexo FROM clientes WHERE cidade = "lisboa" OR sexo = "m";

SELECT * FROM clientes WHERE morada = "Avenida Sousa Neves n.º880 3º Esq";


SELECT * FROM colaboradores;

SELECT * FROM alunos;

SELECT cidade FROM alunos;

SELECT * FROM alunos WHERE idade >= 15;

SELECT * FROM alunos WHERE cidade = "São Paulo";

SELECT * FROM alunos ORDER BY idade ASC;

SELECT * FROM alunos WHERE cidade != "São Paulo";

SELECT * FROM alunos WHERE nome LIKE 'A%';

SELECT * FROM alunos ORDER BY id DESC LIMIT 1;

SELECT * FROM alunos WHERE serie >= 1 AND serie <= 3;

SELECT COUNT(*) as total FROM alunos;