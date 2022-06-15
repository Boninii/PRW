<?php
    include('conexao.php');

    //Upload da foto
    $fotoNome = $_FILES['foto']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);

    //Select file type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    //Valid file extensions
    $extensions_arr = array("jpg", "jpeg", "png", "gif");


    //Check entension
    if(in_array($imageFileType, $extensions_arr))
    {
        if(move_uploaded_file($_FILES['foto']['tmp_name'], $target_dir.$fotoNome))
        {
            $fotoBlob = addslashes(file_get_contents($target_dir.$fotoNome));
        }
    }

    $nome_usuario = $_POST['textNome'];
    $email_usuario = $_POST['email'];
    $fone_usuario = $_POST['fone'];

    echo "Nome do usuário: ".$nome_usuario."<br>"
    ."Email: ".$email_usuario."<br>"
    ."Telefone: ".$fone_usuario;

    $sql = "INSERT INTO  usuario (nome_usuario, email_usuario, telefone_usuario, foto_blob, foto_nome)
                VALUES ('".$nome_usuario."', '".$email_usuario."', '".$fone_usuario."', '".$fotoBlob."', '".$fotoNome."')";

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