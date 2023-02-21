<?php
include "../includes/autentica.php";

$res = false;

if (isset($_GET) && isset($_GET["id"])) {
    $sql = "DELETE FROM empreste WHERE id =" . $_GET['id'] . "";


    $res = mysqli_query($conn, $sql);
}


if ($res) {
    //Redireciona usuário para a listagem
    header("Location: disponiveis.php");
}
