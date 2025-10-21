<?php

//variaveis de conexão
$usuario = 'b7_39865994';
$senha = 'Espacoacolher';
$dbname = 'b7_39865994_acolher';
$host = 'sql207.byethost7.com';

//condição se for conectado, e caso de algum erro, exibe a mensagem
try {
    $pdo = new PDO("mysql:host=$host;
                    dbname=$dbname", $usuario, $senha);

    // set the PDO error mode to exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}