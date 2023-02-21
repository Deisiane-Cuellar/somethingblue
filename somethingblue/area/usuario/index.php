<?php include "../topo.php" ?>
<?php include "../../includes/autentica.php" ?>

<?php
//Se foi enviado parâmetro de erro - se não autenticou
if (isset($_GET['erro'])) {
    echo '<p style="text-align:center;color:red">Usuário e/ou senha incorreto(s).</p>';
}

if (isset($_GET['autentica'])) {
    echo '<p style="text-align:center;color:red">Você não tem permissão de acesso.</p>';
}

?>
<!--HTML-->
<div class="flex">
    <div class="caixaCadastrohome">

        <div class="caixaCadastro3">
            <a href="../logout.php">
                Logout
            </a>
        </div>
    </div>
</div>
<div class="flex">
    <div class="caixaPrincipal">
        <div class="caixaBotao">
            <form action="usuario/empreste.php">
                <input type="submit" value="Empreste">
            </form>
        </div>
        <div class="caixaBotao">
            <form action="usuario/pegueemprestado.php">
                <input class="" type="submit" value="Pegar Emprestado">
            </form>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!--HTML-->

<?php include "../rodape.php" ?>