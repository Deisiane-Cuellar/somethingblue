<?php
include "../../includes/conecta.php";
$res = false;


var_dump($_POST);


if (isset($_POST) && isset($_POST["tipo"])) {
    $sql = "INSERT INTO usuarios (nomeusuario,cep,numero,dtnascimento,celular, email, senha, tipo, cpf) VALUES (
    '" . $_POST['nomeusuario'] . "',
    " . $_POST['cep'] . ",
    " . $_POST['numero'] . ",
    '" . $_POST['dtnascimento'] . "',
    " . $_POST['celular'] . ",
    '" . $_POST['email'] . "',
    '" . $_POST['senha'] . "',
    " . $_POST['tipo'] . ",
    " . $_POST['cpf'] . ")";

    var_dump($sql);
    $res = mysqli_query($conn, $sql);
}

if ($res) {
    session_start();
		
    //Obtém dados do usuário
    
    //Armazena informaçoes do usuário na Sessão
    $_SESSION['id'] = $conn->insert_id;
    $_SESSION['nome'] = $_POST['nomeusuario'];
    //Redireciona usuário para a listagem
    header("Location: index.php");
}
