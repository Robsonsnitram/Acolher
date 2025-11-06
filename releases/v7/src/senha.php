<?php

    $senhaSecreta = 'Acolher@2025';
    $senha = $_POST['senha'];

    if($senha == $senhaSecreta){

        header("Location: ../src/registros.php");
    }else{
        echo "<script>alert('Senha incorreta!');</script>";
        echo "<script>window.location.href = '../src/Coordenacao.php';</script>";
    }