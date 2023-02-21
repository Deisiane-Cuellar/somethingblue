<?php include "../topo.php" ?>


<!--HTML-->
<div class="flex">
    <div class="caixaCadastrohome">
        <div class="caixaCadastro3">
            <a href="../">
                Home
            </a>
        </div>
    </div>
</div>

<?php if (isset($_GET["cad"]) && $_GET["cad"] == 1) {
    echo "<div class='mensagem'> Cadastrado com sucesso! </div>";
} ?>

<div class="flex">
    <div class="caixaPrincipal">
        <div class="caixaCadastro4">
            <form method="POST" action="usuario/novousuario.php">
                <div class="conteudo2">
                    <div class="titulo2">Cadastro Novo Usuário</div>
                    <input type="hidden" name="tipo" value="1">

                    <label for="nomeusuario">NOME</label>
                    <input type="text" name="nomeusuario"><br>

                    <label for="cep">CEP</label>
                    <input type="number" name="cep"><br>

                    <label for="numero">NÚMERO</label>
                    <input type="number" name="numero">

                    <label for="celular">CELULAR</label>
                    <input type="number" name="celular"><br>

                    <label for="cpf">CPF</label>
                    <input type="number" name="cpf"><br>

                    <label for="dtnascimento">NASCIMENTO</label>
                    <input type="date" name="dtnascimento"><br><br>

                    <label for="email">E-MAIL</label>
                    <input type="email" name="email"><br>

                    <label for="senha">SENHA</label>
                    <input type="password" name="senha"><br>
                </div>

                <input type="submit" value="Cadastrar">
            </form>
        </div>


        <div class="clear"></div>
    </div>
</div>
<!--HTML-->

<?php include "../rodape.php" ?>