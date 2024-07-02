<?php

    $dbHost = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "forum-cadastro";

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    // if ($conexao->connect_errno) {
    //     echo("Erro de conexão.");
    // }
    // else {
    //     echo "Conexão realizada com sucesso!";
    // }
    
?>