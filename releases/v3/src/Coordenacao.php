 <!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Acolher</title>
        <link rel="stylesheet" href="CSS/Coordenacao.css">
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
            <div class="Transparencia"></div>

            <div class="Centro">

                <Header>

                    <div class="Icones-sociais">

                        <a href="https:/facebook.com" target="blank"><i class="fa fa-facebook-square"></i></a>
                        <a href="https://www.instagram.com/espacoacolherrara/" target="blank"><i class="fa fa-instagram"></i></a>

                    </div><!--Fechando Icones Sociais-->

                    <div class="Clear"></div>

                    <nav class="Desktop">

                        <ul>

                            <li><a href="../index.php">Acolher</a></li>
                            <li><a href="QuemSomos.php">Quem Somos?</a></li>
                            <li><a href="Profissionais.php">Profissionais</a></li>
                            <li><a href="Agendamento.php">Agendamento</a></li>
                            <li><a href="Coordenacao.php">Coordenação <i class="fa-solid fa-user-lock"></i></a></li>

                        </ul>

                    </nav><!--Fechando Desktop-->

                    <nav class="Mobile">

                        <i class="fa fa-bars"></i>

                        <ul>

                            <li><a href="../index.php">Acolher</a></li>
                            <li><a href="QuemSomos.php">Quem Somos?</a></li>
                            <li><a href="Profissionais.php">Profissionais</a></li>
                            <li><a href="Agendamento.php">Agendamento</a></li>
                            <li><a href="Coordenacao.php">Coordenação</a></li>

                        </ul>
                    </nav><!--Fechando Mobile -->
                    <div class="clear"></div>

                </Header><!--Fechando Header-->

                <div class="Titulo">
                    <img src="IMG/Profissional_Ini.png" alt="Titulo">
                    <h1>ACESSO RESTRITO</h1>
                </div>

                <form action="senha.php" method="POST">
                    <div class="T50 time"><!--Abrindo t50 time-->

                        <input type="password" name="senha" placeholder="Digite sua senha" required>

                        <input type="submit" value="Entrar">

                    </div><!--Fechando t50 time--> 
                </form>


                <div class="Conteudo-cabecalho">

                    <!--<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        Culpa, nemo accusamus cumque quia quis sit, similique ex et,
                         est veniam veritatis? Commodi culpa omnis ipsa, error dolorum 
                         dolores accusantium aliquam.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste,
                         tenetur blanditiis. Consequatur, excepturi ut reiciendis atqu
                         xplicabo, nesciunt quis provident dolorum quia sit distincti
                         o?</p>
                    <a href="#">Saiba mais </a>-->

                </div><!--Fechando Cabecalho-->

            </div><!--Fechando Centro-->

        </section><!--Fechando Principal-->


        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

        <script>

            $(function (){

                $('nav.Mobile i').click(function(){

                    var clicando = $(this).parent().find('ul')
                    if(clicando.is(':visible') == false) {
                        clicando.fadeIn();
                    }
                    else{
                        clicando.fadeOut();
                    }

                })
            })

        </script>

    </body>
    
</html