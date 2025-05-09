<?php

    include("conexao.php");

if(!isset($_POST['cpf']) || $_POST['cpf'] == ''){
    die("Insira um cpf");
}

if(!isset($_POST["senha"]) || $_POST['senha'] == ''){
    die("Insira uma senha");
}

$cpf = $_POST["cpf"];
$senha = $_POST["senha"];

$stmt = $conn->prepare("SELECT nome FROM usuarios WHERE cpf = ? AND senha = ?");
$stmt->bind_param("ss", $cpf, $senha);
$stmt->execute();
$resultado = $stmt->get_result();
$row = $resultado->fetch_assoc();

if(isset($row) && $row['nome'] != ''){
    session_start();
    $_SESSION["cpf"] = $cpf;
    $_SESSION["senha"] = $senha;
    $_SESSION["nome"] = $row['nome'];
    header("Location: principal.php");
    exit();
}else{
    echo "Usuário ou senha incorretos";
}

$stmt->close();
$conn->close();

?>
