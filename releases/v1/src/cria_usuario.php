<?php

//conexão com o banco de dados
    require("Connector.php");

    if(isset($_POST)){

        //variaveis dos dados do formulario
        $nomePaciente = $_POST['nome-paciente'];
        $cpfPaciente = $_POST['CPF-paciente'];
        $emailPaciente = $_POST['e-mail-paciente'];
        $celPaciente = $_POST['celular-paciente'];
        $endPaciente = $_POST['endereco-paciente'];
        $atendimento = $_POST['atendimento-paciente'];
        $observacao = $_POST['especificidade-paciente'];
        $nomeResponsavel = $_POST['nome-responsavel'];
        $emailResponsavel = $_POST['e-mail-responsavel'];
        $celResponsavel = $_POST['celular-responsavel'];
        $endResponsavel = $_POST['endereco-responsavel'];

        //função para registrar os dados na tabela do banco de dados
        $query = 
        "INSERT INTO tbl_registros (
        NOME_PACIENTE, CPF_PACIENTE, EMAIL_PACIENTE, CEL_PACIENTE, END_PACIENTE, ATENDIMENTO, OBSERVACAO, 
        NOME_RESPONSAVEL, EMAIL_RESPONSAVEL, CEL_RESPONSAVEL, END_RESPONSAVEL
        )

        /*indicando as variaveis que serão utilizadas para cada coluna */
        VALUES (
        '$nomePaciente', '$cpfPaciente', '$emailPaciente', '$celPaciente', '$endPaciente', '$atendimento', '$observacao',
        '$nomeResponsavel', '$emailResponsavel', '$celResponsavel', '$endResponsavel'
        )";

        //Prepara os dados para serem inseridos no banco de dados
        $stmt = $pdo->prepare($query);

        //executa a inserção
        $stmt-> execute();

        header("Location: Sucesso.php");

    }