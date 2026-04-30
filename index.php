<?php

define('MEDIA_MINIMA', 7);
define('MEDIA_CRITICA', 5);
define('MAX_FALTAS', 5);

$alunos = [
    'Daniel' => ['status' => 'Ativo', 'media' => 8.5, 'faltas' => 2],
    'Marcus' => ['status' => 'Ativo', 'media' => 9.0, 'faltas' => 0],
    'Eduardo' => ['status' => 'Trancado', 'media' => 6.0, 'faltas' => 5],
    'Alisson' => ['status' => 'Ativo', 'media' => 5.5, 'faltas' => 10],
];

function dadosValidos($dados) {
    return isset($dados['status'], $dados['media'], $dados['faltas']);
}

function gerarRecomendacao($dados) {
    if (!dadosValidos($dados)) {
        return "❌ Dados inválidos.";
    }

    if ($dados['status'] !== 'Ativo') {
        return "⚠️ Matrícula trancada. Procure a secretaria.";
    }

    if ($dados['media'] < MEDIA_CRITICA) {
        return "🚨 Risco de reprovação! Procure monitoria urgente.";
    }

    if ($dados['media'] >= MEDIA_MINIMA && $dados['faltas'] < MAX_FALTAS) {
        return "✅ Excelente desempenho! Recomendado: Sistemas de Larga Escala.";
    }

    if ($dados['faltas'] >= MAX_FALTAS) {
        return "📌 Boa média, mas excesso de faltas. Atenção à frequência.";
    }

    return "📘 Reforce seus estudos em Lógica de Programação.";
}

function renderAluno($nome, $info) {
    $resultado = gerarRecomendacao($info);

    return "
    <div class='card'>
        <h2>$nome</h2>
        <p><strong>Status:</strong> {$info['status']}</p>
        <p><strong>Média:</strong> {$info['media']}</p>
        <p><strong>Faltas:</strong> {$info['faltas']}</p>
        <p class='resultado'>$resultado</p>
    </div>
    ";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>PAI - Plataforma Acadêmica Inteligente</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: #f4f6f8;
    padding: 20px;
}

h1 {
    text-align: center;
}

.container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 15px;
}

.card {
    background: #fff;
    padding: 15px;
    border-radius: 10px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

.resultado {
    margin-top: 10px;
    font-weight: bold;
}
</style>

</head>
<body>

<h1>🎓 Plataforma Acadêmica Inteligente</h1>

<div class="container">
<?php
foreach ($alunos as $nome => $info) {
    echo renderAluno($nome, $info);
}
?>
</div>

</body>
</html>
