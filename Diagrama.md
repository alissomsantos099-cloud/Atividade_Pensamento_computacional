<?php
/**
 * Projeto: Plataforma Acadêmica Inteligente (PAI)
 * Componente: Motor de Recomendação v2.0
 * Descrição: Implementação baseada no diagrama de classes (Herança e Processamento)
 */

// 1. Definição da Estrutura de Dados (Simulando Objetos do Sistema)
$bancoDeDados = [
    ['nome' => 'Daniel', 'media' => 8.5, 'faltas' => 2, 'status' => 'Ativo'],
    ['nome' => 'Marcus', 'media' => 9.0, 'faltas' => 0, 'status' => 'Ativo'],
    ['nome' => 'Eduardo', 'media' => 6.0, 'faltas' => 5, 'status' => 'Trancado'],
    ['nome' => 'Alisson', 'media' => 5.5, 'faltas' => 10, 'status' => 'Ativo'],
];

// 2. Lógica do MotorIA (O coração do Pensamento Computacional)
class MotorIA {
    public static function analisar($aluno) {
        // Regra de Negócio 1: Verificação de Status
        if ($aluno['status'] !== 'Ativo') {
            return [
                'classe' => 'status-critical',
                'msg' => "⚠️ BLOQUEIO: Matrícula {$aluno['status']}. Dirija-se à secretaria."
            ];
        }

        // Regra de Negócio 2: Desempenho de Elite
        if ($aluno['media'] >= 7 && $aluno['faltas'] < 5) {
            return [
                'classe' => 'status-success',
                'msg' => "✅ EXCELÊNCIA: Recomendado para 'Sistemas de Larga Escala'."
            ];
        }

        // Regra de Negócio 3: Alerta de Retenção
        if ($aluno['media'] < 7) {
            return [
                'classe' => 'status-warning',
                'msg' => "📘 REFORÇO: Recomendado revisar 'Lógica de Programação'."
            ];
        }

        // Regra Padrão: Faltas
        return [
            'classe' => 'status-info',
            'msg' => "📌 ATENÇÃO: Desempenho regular. Monitore sua frequência."
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PAI - Dashboard Acadêmico</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f0f2f5; margin: 40px; }
        .container { max-width: 900px; background: white; padding: 20px; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        h1 { color: #1a73e8; border-bottom: 2px solid #e8f0fe; padding-bottom: 10px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 15px; text-align: left; border-bottom: 1px solid #eee; }
        th { background-color: #f8f9fa; color: #5f6368; text-transform: uppercase; font-size: 12px; }
        
        /* Cores de Status baseadas na IA */
        .status-success { color: #188038; background: #e6f4ea; padding: 5px 10px; border-radius: 4px; font-weight: bold; }
        .status-warning { color: #d93025; background: #fce8e6; padding: 5px 10px; border-radius: 4px; }
        .status-critical { color: #70757a; background: #f1f3f4; padding: 5px 10px; border-radius: 4px; font-style: italic; }
        .status-info { color: #1a73e8; background: #e8f0fe; padding: 5px 10px; border-radius: 4px; }
    </style>
</head>
<body>

<div class="container">
    <h1>PAI - Módulo de Verificação</h1>
    <p>Análise em tempo real do desempenho estudantil via MotorIA.</p>

    <table>
        <thead>
            <tr>
                <th>Aluno</th>
                <th>Média</th>
                <th>Faltas</th>
                <th>Recomendação da IA</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bancoDeDados as $aluno): 
                $analise = MotorIA::analisar($aluno);
            ?>
            <tr>
                <td><strong><?= $aluno['nome'] ?></strong></td>
                <td><?= number_format($aluno['media'], 1) ?></td>
                <td><?= $aluno['faltas'] ?></td>
                <td>
                    <span class="<?= $analise['classe'] ?>">
                        <?= $analise['msg'] ?>
                    </span>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>
