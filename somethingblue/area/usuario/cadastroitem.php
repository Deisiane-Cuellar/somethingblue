<?php
include "../topo.php";
include "../../includes/autentica.php";

$res = false;


var_dump($_POST);


if (isset($_POST) && isset($_POST["tipo"])) {
    $sql = "INSERT INTO empreste (id_usuarios, item, tamanho, cor, status) VALUES (
        " . $_SESSION['id'] . ", '" . $_POST['tipo'] . "', '" . $_POST['tamanho'] . "', '" . $_POST['cor'] . "', 1)";
    var_dump($sql);
    $res = mysqli_query($conn, $sql);
}

if ($res) {
    switch ($_POST['tipo']) {
        case 'Anel':
            $cad = 1;
            break;
        case 'Bolsa':
            $cad = 2;
            break;
        case 'Sandália':
            $cad = 3;
            break;
        case 'Vestido':
            $cad = 4;
            break;
        default:
            # code...
            break;
    }
    //Redireciona usuário para a listagem
    header("Location: empreste.php?cad=" . $cad . "");
}
