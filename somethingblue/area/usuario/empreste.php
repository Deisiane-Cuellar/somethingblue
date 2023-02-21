<?php include "../topo.php" ?>

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
<div class="flex">
    <div class="caixaPrincipal">
        <div class="caixaCadastro2">
            <form method="POST" action="usuario/cadastroitem.php">
                <div class="conteudo2">
                    <div class="titulo2">Cadastro Anel</div>
                    <input type="hidden" name="tipo" value="Anel">

                    <label for="tamanho">Tamanho</label>
                    <select name="tamanho">
                        <option value="14">14</option>
                        <option value="16">16</option>
                        <option value="18">18</option>
                        <option value="20">20</option>
                    </select>
                    <br>
                    <label for="cor">Cor</label>
                    <select name="cor">
                        <option value="Ouro">Ouro</option>
                        <option value="Prata">Prata</option>
                        <option value="Rose">Rose</option>
                    </select>
                </div>
                <?php if (isset($_GET["cad"]) && $_GET["cad"] == 1) {
                    echo "<div class='mensagem'> Cadastrado com sucesso! </div>";
                } ?>
                <input type="submit" value="Cadastrar">
            </form>
        </div>

        <div class="caixaCadastro2">
            <form method="POST" action="usuario/cadastroitem.php">
                <div class="conteudo2">
                    <div class="titulo2">Cadastro Bolsa</div>
                    <input type="hidden" name="tipo" value="Bolsa">

                    <label for="tamanho">Tamanho</label>
                    <select name="tamanho">
                        <option value="Pequena">Pequena</option>
                        <option value="Média">Média</option>
                        <option value="Grande">Grande</option>
                    </select>
                    <br>
                    <label for="cor">Cor</label>
                    <select name="cor">
                        <option value="Preta">Preta</option>
                        <option value="Branca">Branca</option>
                        <option value="Prata">Prata</option>
                        <option value="Dourada">Dourada</option>
                    </select>
                </div>
                <?php if (isset($_GET["cad"]) && $_GET["cad"] == 2) {
                    echo "<div class='mensagem'> Cadastrado com sucesso! </div>";
                } ?>
                <input type="submit" value="Cadastrar">
            </form>
        </div>

        <div class="caixaCadastro2">
            <form method="POST" action="usuario/cadastroitem.php">
                <div class="conteudo2">
                    <div class="titulo2">Cadastro Sandália</div>
                    <input type="hidden" name="tipo" value="Sandália">

                    <label for="tamanho">Tamanho</label>
                    <select name="tamanho">
                        <option value="36/37">36/37</option>
                        <option value="38/39">38/39</option>
                        <option value="40/41">40/41</option>
                        <option value="42/43">42/43</option>
                    </select>
                    <br />
                    <label for="cor">Cor</label>
                    <select name="cor">
                        <option value="Preta">Preta</option>
                        <option value="Branca">Branca</option>
                        <option value="Prata">Prata</option>
                        <option value="Dourada">Dourada</option>
                    </select>
                </div>
                <?php if (isset($_GET["cad"]) && $_GET["cad"] == 3) {
                    echo "<div class='mensagem'> Cadastrado com sucesso! </div>";
                } ?>
                <input type="submit" value="Cadastrar">
            </form>
        </div>

        <div class="caixaCadastro2">
            <form method="POST" action="usuario/cadastroitem.php">
                <div class="conteudo2">
                    <div class="titulo2">Cadastro Vestido</div>
                    <input type="hidden" name="tipo" value="Vestido">

                    <label for="tamanho">Tamanho</label>
                    <select name="tamanho">
                        <option value="36">36</option>
                        <option value="38">38</option>
                        <option value="40">40</option>
                        <option value="42">42</option>
                        <option value="44">44</option>
                    </select>
                    <br />
                    <label for="cor">Cor</label>
                    <select name="cor">
                        <option value="Verde">Verde</option>
                        <option value="Azul">Azul</option>
                        <option value="Rosa">Rosa</option>
                        <option value="Amarelo">Amarelo</option>
                    </select>
                </div>
                <?php if (isset($_GET["cad"]) && $_GET["cad"] == 4) {
                    echo "<div class='mensagem'> Cadastrado com sucesso! </div>";
                } ?>
                <input type="submit" value="Cadastrar">
            </form>
        </div>

        <div class="clear"></div>
    </div>
</div>

<!--HTML-->

<?php include "../rodape.php" ?>