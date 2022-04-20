<?php
    include('conexao.php');
    $nome_usuario = $_POST['textNome'];
    $email_usuario = $_POST['email'];
    $fone_usuario = $_POST['fone'];

    echo "Nome do usuário: ".$nome_usuario."<br>"
    ."Email: ".$email_usuario."<br>"
    ."Telefone: ".$fone_usuario;
?>