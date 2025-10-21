 <?php

//conexão com o banco de dados
    require("connector.php");

    if(isset($_POST)){

        //variaveis dos dados do formulario
        $nomePaciente = $_POST['nome-paciente'];
        $cpfPaciente = $_POST['CPF-paciente'];
        $emailPaciente = $_POST['e-mail-paciente'];
        $celPaciente = $_POST['celular-paciente'];
        $cepPaciente = $_POST['cep-paciente'];
        $ruaPaciente = $_POST['rua-paciente'];
        $bairroPaciente = $_POST['bairro-paciente'];
        $cidadePaciente = $_POST['cidade-paciente'];
        $ufPaciente = $_POST['uf-paciente'];
        $atendimento = $_POST['atendimento-paciente'];
        $observacao = $_POST['especificidade-paciente'];
        $nomeResponsavel = $_POST['nome-responsavel'];
        $emailResponsavel = $_POST['e-mail-responsavel'];
        $celResponsavel = $_POST['celular-responsavel'];

        //função para registrar os dados na tabela do banco de dados
        $query = 
        "INSERT INTO tbl_registros (
        NOME_PACIENTE, CPF_PACIENTE, EMAIL_PACIENTE, CEL_PACIENTE, CEP_PACIENTE, RUA_PACIENTE, BAIRRO_PACIENTE, CIDADE_PACIENTE, UF_PACIENTE,
        ATENDIMENTO, OBSERVACAO, 
        NOME_RESPONSAVEL, EMAIL_RESPONSAVEL, CEL_RESPONSAVEL
        )

        /*indicando as variaveis que serão utilizadas para cada coluna */
        VALUES (
        '$nomePaciente', '$cpfPaciente', '$emailPaciente', '$celPaciente', 
        '$cepPaciente', '$ruaPaciente' , '$bairroPaciente' , '$cidadePaciente' , '$ufPaciente' , 
        '$atendimento', '$observacao',
        '$nomeResponsavel', '$emailResponsavel', '$celResponsavel'
        )";

        //Prepara os dados para serem inseridos no banco de dados
        $stmt = $pdo->prepare($query);

        //executa a inserção
        $stmt-> execute();

        header("Location: Sucesso.php");
    
    } else {
        echo "Erro ao enviar o formulário.";
    }
    