<?php
    $hostname = "localhost";
    $port = 3307;//COLOCAR 3307, NA ESCOLA
    $username = "root";
    $password = "";
    $database = "projeto02";
    $con = mysqli_connect($hostname, $username, $password, $database, $port);

    if(mysqli_connect_error())
    {
        printf("Erro ao conectar ao banco de dados: %s\n", mysqli_connect_error());
        exit;
    }
    printf("Banco de dados conectados com sucesso \o/<br><br>");
?>