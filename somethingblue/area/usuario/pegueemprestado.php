<?php
include "../topo.php";
include "../../includes/autentica.php";


$listaAnel = array();
$listaBolsa = array();
$listaSandalia = array();
$listaVestido = array();

$sql = "SELECT * FROM empreste WHERE status = 1 ORDER BY item, tamanho ASC";
$res = mysqli_query($conn, $sql);

if ($res) {
    while ($row = mysqli_fetch_assoc($res)) {
        switch ($row["item"]) {
            case 'Anel':
                $listaAnel[] = $row;
                break;
            case 'Bolsa':
                $listaBolsa[] = $row;
                break;
            case 'Sandália':
                $listaSandalia[] = $row;
                break;
            case 'Vestido':
                $listaVestido[] = $row;
                break;
        }
    }
}

?>

<!--HTML-->

<div class="flex">
    <div class="caixaCadastrohome">
        <div class="caixaCadastro3">
            <a href="./usuario/">
                Home
            </a>
        </div>
        <div class="caixaCadastro3">
            <a href="../logout.php">
                Logout
            </a>
        </div>
    </div>
</div>

<?php if (isset($_GET["cad"]) && $_GET["cad"] == 1) {
    echo "<div class='mensagem'> Item Emprestado com sucesso! </div>";
} ?>
<div class="flex">
    <div class="caixaPrincipal">
        <div class="caixaCadastro">
            <form action="usuario/cadastroempreste.php" method="POST">
                <div class="conteudo">
                    <div class="titulo">Empreste Anel</div>
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Tamanho</th>
                                <th>Cor</th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($listaAnel as $key => $value) {
                            echo "<tr><td><input type='radio' name='rditem' value='" . $value["id"] . "'/></td><td>" . $value["tamanho"] . "</td><td>" . $value["cor"] . "</td></tr>";
                        }
                        ?>
                    </table>
                </div>
                <?php
                if (count($listaAnel) == 0) {
                    echo "Nenhum item disponível";
                } else {
                ?>
                    <div>
                        <label for="datafinal">Prazo Devolução:</label>
                        <label>7 Dias</label>
                    </div>

                    <input type="submit" value="Cadastrar">
                <?php
                }
                ?>
            </form>
        </div>

        <div class="caixaCadastro">
            <form action="usuario/cadastroempreste.php" method="POST">
                <div class="conteudo">
                    <div class="titulo">Empreste Bolsa</div>
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Tamanho</th>
                                <th>Cor</th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($listaBolsa as $key => $value) {
                            echo "<tr><td><input type='radio' name='rditem' value='" . $value["id"] . "'/></td><td>" . $value["tamanho"] . "</td><td>" . $value["cor"] . "</td></tr>";
                        }
                        ?>
                    </table>
                </div>
                <?php
                if (count($listaBolsa) == 0) {
                    echo "Nenhum item disponível";
                } else {
                    ?>
                    <div>
                        <label for="datafinal">Prazo Devolução:</label>
                        <label>7 Dias</label>
                    </div>

                    <input type="submit" value="Cadastrar">
                <?php
                }
                ?>
            </form>
        </div>

        <div class="caixaCadastro">
            <form action="usuario/cadastroempreste.php" method="POST">
                <div class="conteudo">
                    <div class="titulo">Empreste Sandália</div>

                    <table>

                        <thead>
                            <tr>
                                <th></th>
                                <th>Tamanho</th>
                                <th>Cor</th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($listaSandalia as $key => $value) {
                            echo "<tr><td><input type='radio' name='rditem' value='" . $value["id"] . "'/></td><td>" . $value["tamanho"] . "</td><td>" . $value["cor"] . "</td></tr>";
                        }
                        ?>
                    </table>
                </div>
                <?php
                if (count($listaSandalia) == 0) {
                    echo "Nenhum item disponível";
                } else {
                    ?>
                    <div>
                        <label for="datafinal">Prazo Devolução:</label>
                        <label>7 Dias</label>
                    </div>

                    <input type="submit" value="Cadastrar">
                <?php
                }
                ?>
            </form>
        </div>

        <div class="caixaCadastro">
            <form action="usuario/cadastroempreste.php" method="POST">
                <div class="conteudo">
                    <div class="titulo">Empreste Vestido</div>
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Tamanho</th>
                                <th>Cor</th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($listaVestido as $value) {
                            echo "<tr><td><input type='radio' name='rditem' value='" . $value["id"] . "'/></td><td>" . $value["tamanho"] . "</td><td>" . $value["cor"] . "</td></tr>";
                        }
                        ?>
                    </table>
                </div>
                <?php
                if (count($listaVestido) == 0) {
                    echo "Nenhum item disponível";
                } else {
                    ?>
                    <div>
                        <label for="datafinal">Prazo Devolução:</label>
                        <label>7 Dias</label>
                    </div>

                    <input type="submit" value="Cadastrar">
                <?php
                }
                ?>
            </form>
        </div>

        <div class="clear"></div>
    </div>
</div>
<!--HTML-->

<?php include "../rodape.php" ?>