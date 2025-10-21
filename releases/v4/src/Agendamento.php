 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Acolher</title>
        <link rel="stylesheet" href="CSS/Agendamento.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&family=Luckiest+Guy&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&display=swap" rel="stylesheet">
        <script>
        
            function limpa_formulário_cep() {
                    //Limpa valores do formulário de cep.
                    document.getElementById('rua').value=("");
                    document.getElementById('bairro').value=("");
                    document.getElementById('cidade').value=("");
                    document.getElementById('uf').value=("");
            }
        
            function meu_callback(conteudo) {
                if (!("erro" in conteudo)) {
                    //Atualiza os campos com os valores.
                    document.getElementById('rua').value=(conteudo.logradouro);
                    document.getElementById('bairro').value=(conteudo.bairro);
                    document.getElementById('cidade').value=(conteudo.localidade);
                    document.getElementById('uf').value=(conteudo.uf);
                } //end if.
                else {
                    //CEP não Encontrado.
                    limpa_formulário_cep();
                    alert("CEP não encontrado.");
                }
            }

            function pesquisacep(valor) {
            
                //Nova variável "cep" somente com dígitos.
                var cep = valor.replace(/\D/g, '');
            
                //Verifica se campo cep possui valor informado.
                if (cep != "") {
                
                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;
                
                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {
                    
                        //Preenche os campos com "..." enquanto consulta webservice.
                        document.getElementById('rua').value="...";
                        document.getElementById('bairro').value="...";
                        document.getElementById('cidade').value="...";
                        document.getElementById('uf').value="...";
                    
                        //Cria um elemento javascript.
                        var script = document.createElement('script');
                    
                        //Sincroniza com o callback.
                        script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';
                    
                        //Insere script no documento e carrega o conteúdo.
                        document.body.appendChild(script);
                    
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            };

        </script>
    </head>
    <body>

        <section class="Principal"><!--Iniciando Principal-->
            <div class="Transparencia"></div>

            <div class="Centro">

                <Header><!--Abrindo header-->

                    <div class="Icones-sociais"><!--Abrindo icones sociais-->

                        <a href="https:/facebook.com" target="blank"><i class="fa fa-facebook-square"></i></a>
                        <a href="https://www.instagram.com/raravgp/" target="blank"><i class="fa fa-instagram"></i></a>

                    </div><!--Fechando Icones Sociais-->

                    <div class="Clear"></div>   

                    <nav class="Desktop"><!--Abrindo desktop-->

                        <ul>

                            <li><a href="../index.php">Acolher</a></li>
                            <li><a href="QuemSomos.php">Quem Somos?</a></li>
                            <li><a href="Profissionais.php">Profissionais</a></li>
                            <li><a href="Agendamento.php">Agendamento</a></li>
                            <li><a href="Coordenacao.php">Coordenação <i class="fa-solid fa-user-lock"></i></a></li>

                        </ul>

                    </nav><!--Fechando Desktop-->

                    <nav class="Mobile"><!--Abrindo mobile-->

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

                <div class="Conteudo-cabecalho"><!--Abrindo cabecalho-->

                    <img src="../src/IMG/Img_ini_quemsomos.png" alt="">
                    <h2>Agendamento</h2>
                    <p>
                        Preencha os dados solicitados de acordo com o atendimento desejado, 
                        assim nossos profissionais estarão entrando em contato e agendando!
                    </p>

                </div><!--Fechando Cabecalho-->

            </div><!--Fechando Centro-->

        </section><!--Fechando Principal-->

        <section class="Depoimento"><!--Abrindo depoimento-->

            <div class="Chamada-depoimento"><!--Abrindo chamada depoimento-->
                <div class="Centro">
                    <h2 id="Agendamento">Preencha seus dados</h2>
                </div>
            </div><!--Fechando Chamada depoimento-->

            <section class="Box-depoimento"><!--Abrindo Box depoimento-->

                <div class="Centro-depoimento"><!--Abrindo centro depoimento-->

                    <div class="Comentarios">

                        <div class="Comentarios-conteudo">

                            <div class="pacien">
                                <h2>Dados do Paciente </h2>

                                <form action="cria_usuario.php" method="POST">

                                    <div class="paciente-1">
                                        <input name="nome-paciente" type="text" placeholder="Insira seu nome...">
                                        <input name="CPF-paciente" type= "text" placeholder="Insira seu CPF">
                                        <input name="e-mail-paciente" type="email" placeholder="Insira o e-mail">
                                        <input name="celular-paciente" type="tel" placeholder="(DDD) Celular">
                                        <p>Digite o seu CEP:</p>
                                        <input name="cep-paciente" type="text" placeholder="Digite o CEP" id="cep" value="" size="10" maxlength="9"
                                               onblur="pesquisacep(this.value);" /><br />
                                        <input name="rua-paciente" type="text" placeholder="Rua" id="rua" size="60" /><br />
                                        <input name="bairro-paciente" type="text" placeholder="Bairro" id="bairro" size="40" /><br />
                                        <input name="cidade-paciente" type="text" placeholder="Cidade" id="cidade" size="40" /><br />
                                        <input name="uf-paciente" type="text" placeholder="UF" id="uf" size="2" /><br />

                                        <p>Atendimento que precisa:</p>

                                        <input class="Opcoes" type="text" name="atendimento-paciente" placeholder="Atendimento que precisa" list="Atendimentos">
                                        <datalist id="Atendimentos">
                                          <option value="Pedagoga"></option>
                                          <option value="Psicopedagoga"></option>
                                          <option value="Nutricionista"></option>
                                          <option value="Terapeuta"></option>
                                          <option value="Musicoterapia"></option>
                                        </datalist>

                                        <p>Alguma Especificidade?</p>
                                        <input type="text" name="especificidade-paciente" placeholder="Descreva sua observação">

                                    </div>

                                    <div class="paciente-2">
                                        <h2>Dados do Responsável </h2>
                                        <p id="info-resp">Preencha somente se for atendimento para uma criança</p>

                                        <input type="text" name="nome-responsavel" placeholder="Insira seu nome...">
                                        <input type="email" name="e-mail-responsavel" placeholder="Insira o e-mail">
                                        <input type="tel" name="celular-responsavel" placeholder="(DDD) Celular">

                                        <Input type="submit" value="Enviar"></Input>
                                    </div>

                                </form>

                            </div>

                        </div>


                </div><!--Fechando centro depoimento--> 

            </section><!--Fechando Box depoimento-->

        </section><!--Fechando depoimento-->

        <footer>      

            <div class="Footer-opcoes">

                <li><a href="../index.php">Acolher</a></li>
                <li><a href="QuemSomos.php#Historia">História</a></li>

            </div>

            <div class="Footer-opcoes">

                <li><a href="QuemSomos.php">Quem Somos?</a></li>
                <li><a href="https://maps.app.goo.gl/TL5BUd1WbPBUJEJN7" target="_blank">Localidade</a></li>

            </div>

            <div class="Footer-opcoes">

                <li><a href="Profissionais.php">Profissionais</a></li>
                <li><a href="QuemSomos.php#Duvidas">Dúvidas</a></li>

            </div>

            <div class="Footer-opcoes">

                <li><a href="Agendamento.php#Agendamento">Agendamentos</a></li>
                <li><a href="../index.php#Tipos">Atendimentos</a></li>

            </div>


        </footer>


        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

        <script>

            $(function (){

                $('nav.Mobile i').click(function(){

                    var clicando = $(this).parent().find('ul')
                    if(clicando.is(':visible') == false) {
                        clicando.fadeIn();
                    }
                    else
                    {
                        clicando.fadeOut();
                    }

                })
            })

        </script>

    </body>
    
</html