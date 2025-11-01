<?php
// Caminho: Acolher/tests/teste_senha.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $senhaDigitada = $_POST['senha'] ?? '';
    $senhaCorreta = 'Acolher@2025'; // mesmo valor usado no sistema real

    $resultado = '';
    if ($senhaDigitada === $senhaCorreta) {
        $resultado = "✅ Senha correta! Acesso permitido.";
    } else {
        $resultado = "❌ Senha incorreta! Acesso negado.";
    }

    // Diretório de logs
    $logDir = __DIR__ . '/Log_senha';
    if (!is_dir($logDir)) {
        mkdir($logDir, 0777, true);
    }

    // Cria o arquivo de log
    $arquivo = $logDir . '/log_senha_' . date('Ymd_His') . '.txt';
    $dataHora = date('Y-m-d H:i:s');

    $conteudo = "===== TESTE DE SENHA =====\n";
    $conteudo .= "Data/Hora: $dataHora\n";
    $conteudo .= "Senha digitada: $senhaDigitada\n";
    $conteudo .= "Resultado: $resultado\n";
    $conteudo .= "==========================\n\n";

    file_put_contents($arquivo, $conteudo, FILE_APPEND);

    echo $resultado;
    exit;
}
?>