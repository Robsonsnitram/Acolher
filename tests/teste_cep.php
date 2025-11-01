<?php
// Acolher/tests/teste_cep.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $resultado = $_POST['resultado'] ?? 'Sem resultado';
    $cep       = $_POST['cep'] ?? '';
    $rua       = $_POST['rua'] ?? '';
    $bairro    = $_POST['bairro'] ?? '';
    $cidade    = $_POST['cidade'] ?? '';
    $uf        = $_POST['uf'] ?? '';

    $data = date('Y-m-d H:i:s');

    $logDir = __DIR__ . '/Log_cep';
    if (!is_dir($logDir)) {
        mkdir($logDir, 0777, true);
    }

    $arquivo = $logDir . '/log_' . date('Ymd_His') . '.txt';

    $conteudo = "===== TESTE DE CEP =====\n";
    $conteudo .= "Data/Hora: $data\n";
    $conteudo .= "Resultado: $resultado\n";
    $conteudo .= "CEP Testado: $cep\n";
    $conteudo .= "Rua: $rua\n";
    $conteudo .= "Bairro: $bairro\n";
    $conteudo .= "Cidade: $cidade\n";
    $conteudo .= "UF: $uf\n";
    $conteudo .= "=========================\n\n";

    file_put_contents($arquivo, $conteudo, FILE_APPEND);

    echo "Log salvo com sucesso.";
    exit;
}
?>
