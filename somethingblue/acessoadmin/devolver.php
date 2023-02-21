<?php
include "../includes/autentica.php";

$res = false;

if (isset($_GET) && isset($_GET["id"])) {
    $sql = "UPDATE pegaremprestado SET entregue=1 , dtdevolucao=NOW() WHERE id =" . $_GET['id'] . "";


    $res = mysqli_query($conn, $sql);
}


if ($res) {
    //Redireciona usuário para a listagem
    if (isset($_GET["p"]) && $_GET["p"]=="e")
    header("Location: emprestados.php");
    else
    header("Location: vencidos.php");
}
