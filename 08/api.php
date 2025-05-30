<?php

header('content-type: application/json');

// echo json_encode(['mensagem' => 'ola mundo']);

// Simulação de Dados
$pessoas = [
    ['id' => 1, 'nome' => 'João'],
    ['id' => 2, 'nome' => 'Maria'],
    ['id' => 3, 'nome' => 'José'],
];



$rota = $_GET['rota'] ?? '';
$metodo = $_SERVER['REQUEST_METHOD'];

// echo "Ola Cliente, vc acessou com o methoso " . $metodo;

if ($metodo == 'GET' && $rota == 'ola') {
    echo json_encode(['mensagem' => 'Olá mundo']);
    exit();
}

if ($metodo == 'GET' && $rota == "ola-nome") {
    $nome = $_GET['nome'];
    echo json_encode(['mensagem' => "Olá, $nome"]);
    exit();
}

if ($metodo == 'GET' && $rota == 'pessoas') {
    echo json_encode($pessoas);
    exit();
}

if ($metodo == 'POST' && $rota == 'cadastrar-url') {
    $id = $_GET['id'] ?? null;
    $nome = $_GET['nome'] ?? null;

    if ($id && $nome) {
        $pessoas[] = ['id' => (int)$id, 'nome' => $nome];

        echo json_encode([
            'mensagem' => 'Pessoa cadastrada com sucesso!',
            'pessoas' => $pessoas
        ]);
        exit;
    }
    echo json_encode(['erro' => 'Informe o id e nome na URL']);
    exit;
}


if($metodo == 'POST' && $rota == 'cadastrar-body')
{
    $input = json_decode(file_get_contents('php://input'), true);

    $id = $input['id'] ?? null;
    $nome = $input['nome'] ?? null;

    if(!$id || !$nome)
    {
        echo json_encode(['erro' => 'Informe o id e nome na URL']);
        exit;
    }

    $pessoas[] = ['id' => (int)$id, 'nome' => $nome];

    echo json_encode([
        'mensagem' => 'Pessoa cadastrada com sucesso!',
        'pessoas' => $pessoas
    ]);
    exit;
}


http_response_code(404);
echo json_encode(['erro' => 'rota não encontrada']);
