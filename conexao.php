<?php

    $servidor = "localhost";
    $usuario = "root";
    $senhax9 = "";
    $dbname = "primeira_aula";

    $conn = new mysqli($servidor,$usuario,$senha,$dbname);
    if($conn->connect_error){
        die("Falha na conexão" .$conn->connect_error);
    }
