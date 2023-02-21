<!-- 
    Curso: Análise e Desenvolvimento de Sistemas.
    Aluna: Deisiane Prata Cuellar; 
    Aluna: Juliana Loise Fogiato Padilha;

    Usuario ADM: catarinaelisasilveira@yohoo.com
    Senha: 6OAb205cCk

    Usuário Final: alicia.nicole.depaula@yohoo.com.br
	 Senha: rOptgtnqKG
-->

<!DOCTYPE html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <base href="/somethingblue/">
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Something Blue</title>

    <link rel="icon" href="imagens/favicon2.png" />
    <link rel="stylesheet" href="estiloindex.css" />
</head>

<body>
    <div id="page-container">
        <div id="MainHeader">
            <div></div>
        </div>
        <div id="content-wrap">
            <!--HTML-->
            <div class="caixalogin">
                <div>
                    <?php

                    //Se foi enviado parâmetro de erro - se não autenticou
                    if (isset($_GET['erro'])) {
                        echo '<p style="text-align:center;color:red">Usuário e/ou senha incorreto(s).</p>';
                    }

                    if (isset($_GET['autentica'])) {
                        echo '<p style="text-align:center;color:red">Você não tem permissão de acesso.</p>';
                    }

                    ?>
                    <form action="login.php" method="POST">
                        <input type="email" placeholder="Usuário" name="email">
                        <input type="password" placeholder="Senha" name="senha">
                        <input type="submit" value="Entrar">
                    </form>
                    <form action="area/usuario/cadastrousuario.php" method="POST">
                    <input type="submit" value="Cadastre-se"></form>
                </div>
            </div>
            <div class="titulo">ALGO VELHO, ALGO NOVO, ALGO EMPRESTADO E ALGO AZUL</div>
            <div class="inicio">
                Casamento é um ritual que celebra o amor e união de duas pessoas. Nesse momento cada detalhe é muito
                especial e
                cheio de significado, porém, há casais que honram essa tradição fielmente e outros que não são tão
                exigentes com todos os detalhes e querem somente que seja algo singelo, mas que não perca o brilho que
                toda a
                cerimônia tem.
                Nós do SOMETHING BLUE sabemos que uma celebração de casamento é algo muito caro e que muitos casais
                passam anos
                economizando
                para então poder realizar esse sonho. Mas nós não podemos deixar com que essa felicidade e realização
                desse sonho
                tenha que esperar tanto.
                Cada noivo e noiva sabe o quanto cada detalhe faz a diferença, seja um acessório, um buquê, um vestido,
                etc... Mas
                que com o tempo há algo que não
                serão utilizados sempre e que podem ser compartilhado com outros casais e que possam desfrutar dessa
                mesma
                sensação sem gastar nada.<br><br><br>

                Com isso, deixe aqui... <br> Seu ALGO VELHO, ALGO NOVO, ALGO EMPRESTADO E ALGO AZUL<br>
            </div>

            <div class="caixasListas">
                <div class="caixaLista">
                    <div class="conteudo">
                        <h2>DEIXE AQUI:</h2>
                        <ul>
                            <li>ANEL</li>
                            <li>BOLSA</li>
                            <li>SANDÁLIA</li>
                            <li>VESTIDO</li>
                        </ul>
                        <img src="imagens/paisagem2.jpg" class="imagembeneficios">
                    </div>
                </div>

                <div class="caixaLista">
                    <div class="conteudo">
                        <h2>ESCOLHA</h2>
                        <ul>
                            <li>EMPRESTE</li>
                            <li>PEGUE EMPRESTADO</li>
                        </ul>
                        <img src="imagens/sandalia1.jpeg" class="imagembeneficios">
                    </div>
                </div>
                <div class="clear"></div>
            </div>

            <!--HTML-->
        </div>
        <footer id="footer">Todos os Direitos Reservados SAC 0800 123123</footer>
    </div>
</body>

</html>