<?php
// Caminho: Acolher/tests/validaCPF.php

function validaCPF($cpf) {
    $cpf = preg_replace('/[^0-9]/is', '', $cpf);

    if (strlen($cpf) != 11) return false;
    if (preg_match('/(\d)\1{10}/', $cpf)) return false;

    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) return false;
    }
    return true;
}

// Recebe o CPF via POST (AJAX)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cpf = $_POST['cpf'] ?? '';

    $resultado = validaCPF($cpf);

    // Diretório de logs
    $logDir = __DIR__ . '/Log_cpf';
    if (!is_dir($logDir)) {
        mkdir($logDir, 0777, true);
    }

    // Cria o arquivo de log
    $arquivo = $logDir . '/log_cpf_' . date('Ymd_His') . '.txt';
    $dataHora = date('Y-m-d H:i:s');
    $status = $resultado ? '✅ CPF válido' : '❌ CPF inválido';

    $conteudo = "===== TESTE DE CPF =====\n";
    $conteudo .= "Data/Hora: $dataHora\n";
    $conteudo .= "CPF testado: $cpf\n";
    $conteudo .= "Resultado: $status\n";
    $conteudo .= "========================\n\n";

    file_put_contents($arquivo, $conteudo, FILE_APPEND);

    echo $status;
    exit;
}
?>
