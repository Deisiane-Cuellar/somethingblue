<?php
include "../topo.php";
include "../../includes/autentica.php";

$res = false;

var_dump($_POST);

if (isset($_POST) && isset($_POST["rditem"])) {
    $sql = "INSERT INTO pegaremprestado (id_usuarios, id_empreste, dtinicio, dtfinal, entregue) VALUES (
        " . $_SESSION['id'] . ", " . $_POST['rditem'] . ", NOW(), DATE_ADD(NOW(), INTERVAL 7 DAY), 0)";

    var_dump($sql);

    $res = mysqli_query($conn, $sql);

    $sql = "UPDATE empreste SET status = 0 WHERE id =" . $_POST['rditem'];
    $res = mysqli_query($conn, $sql);
}

var_dump($res);

if ($res) {
    //Redireciona usuário para a listagem
    header("Location: pegueemprestado.php?cad=1");
}
