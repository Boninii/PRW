<?php
    include('conexao.php');
    $nome_usuario = $_POST['textNome'];
    $email_usuario = $_POST['email'];
    $fone_usuario = $_POST['fone'];

    echo "Nome do usuário: ".$nome_usuario."<br>"
    ."Email: ".$email_usuario."<br>"
    ."Telefone: ".$fone_usuario;

    $sql = "INSERT INTO  usuario (nome_usuario, email_usuario, telefone_usuario)
                VALUES ('".$nome_usuario."', '".$email_usuario."', '".$fone_usuario."')";

    $result = mysqli_query($con, $sql);

    if($result)
    {
        echo "<br><br>Dados inseridos com sucesso!";
    }
    else
    {
        echo "<br><br>Erro ao inserir oo banco de dados: ".mysqli_error($con);
    }
?>