<?php
    include_once('config.php');

    $sql = "SELECT * FROM tbl_registros ORDER BY ID DESC";
    $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acolher</title>
    <link rel="stylesheet" href="CSS/registros.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&family=Luckiest+Guy&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&display=swap" rel="stylesheet">
</head>
<body>

    <section class="Principal"><!--Iniciando Principal-->

        <div class="Centro">

            <Header>
                
                <div class="Clear"></div>

                <nav class="Desktop">

                    <ul>

                        <li><a href="Coordenacao.php"><i class="fa-solid fa-person-walking-arrow-loop-left"></i>  Voltar</a></li>

                    </ul>

                </nav><!--Fechando Desktop-->

                <nav class="Mobile">

                    <i class="fa fa-bars"></i>

                    <ul>

                        <li><a href="Coordenacao.php">Voltar</a></li>

                    </ul>
                </nav><!--Fechando Mobile -->
                <div class="clear"></div>

            </Header><!--Fechando Header-->

        </div><!--Fechando Centro-->
    
    </section><!--Fechando Principal-->

    <section class="Tabela">

        <div class="Centro">

            <h1>Agenda</h1>
            
                <table class="Registros" border="1">

                    <thead class="Topo">
                        <tr>
                            <th>ID</th>
                            <th>Nome Paciente</th>
                            <th>CPF Paciente</th>
                            <th>E-mail Paciente</th>
                            <th>Celular Paciente</th>
                            <th>Endereço Paciente</th>
                            <th>Atendimento</th>
                            <th>Especificidade</th>
                            <th>Nome Responsável</th>
                            <th>E-mail Responsável</th>
                            <th>Celular Responsável</th>
                            <th>Endereço Responsável</th>
                        </tr>
                    </thead>

                    <tbody class="Dados">
                        <?php
                            while($user_data = mysqli_fetch_assoc($result))
                            {
                                echo "<tr>";
                                    echo "<td>".$user_data['ID']."</td>";
                                    echo "<td>".$user_data['NOME_PACIENTE']."</td>";
                                    echo "<td>".$user_data['CPF_PACIENTE']."</td>";
                                    echo "<td>".$user_data['EMAIL_PACIENTE']."</td>";
                                    echo "<td>".$user_data['CEL_PACIENTE']."</td>";
                                    echo "<td>".$user_data['END_PACIENTE']."</td>";
                                    echo "<td>".$user_data['ATENDIMENTO']."</td>";
                                    echo "<td>".$user_data['OBSERVACAO']."</td>";
                                    echo "<td>".$user_data['NOME_RESPONSAVEL']."</td>";
                                    echo "<td>".$user_data['EMAIL_RESPONSAVEL']."</td>";
                                    echo "<td>".$user_data['CEL_RESPONSAVEL']."</td>";
                                    echo "<td>".$user_data['END_RESPONSAVEL']."</td>";
                                echo "</tr>";
                            }
                        ?>
                        
                    </tbody>

                </table>

        </div>

    </section>




</body>
</html>