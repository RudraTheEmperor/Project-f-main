<?php
session_start();

if(!isset($_SESSION['usuario']) || $_SESSION['usuario'] == ''){
    die("favor informar um usuário");
}

if(!isset($_SESSION['senha']) || $_SESSION['senha'] == ''){
    die("favor informar a senha");
}

?>