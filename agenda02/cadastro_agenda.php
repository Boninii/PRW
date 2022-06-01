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


    $nome_agenda = $_POST['nome'];
    $apelido_agenda = $_POST['apelido'];
    $endereco_agenda = $_POST['endereco'];
    $bairro_agenda = $_POST['bairro'];
    $cidade_agenda= $_POST['cidade'];
    $estado_agenda = $_POST['estado'];
    $fone_agenda = $_POST['fone'];
    $celular_agenda = $_POST['cell'];
    $email_agenda = $_POST['email'];
    $dt_cadastro = date("Y-m-d");

    echo "Nome da agenda: ".$nome_agenda."<br>"
    ."Apelido da agenda:  ".$apelido_agenda."<br>"
    ."Endereço:  ".$endereco_agenda."<br>"
    ."Bairro:  ".$bairro_agenda."<br>"
    ."Cidade:  ".$cidade_agenda."<br>"
    ."Estado:  ".$estado_agenda."<br>"  
    ."Telefone: ".$fone_agenda."<br>"
    ."Celular: ".$celular_agenda."<br>"
    ."Email: ".$email_agenda."<br>";

    $sql = "INSERT INTO  agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email, dt_cadastro, foto_blob, foto_nome)
                VALUES ('".$nome_agenda."', '".$apelido_agenda."', '".$endereco_agenda."', '".$bairro_agenda."', 
                '".$cidade_agenda."', '".$estado_agenda."', '".$fone_agenda."', '".$celular_agenda."', '".$email_agenda."', 
                '".$dt_cadastro."', '".$fotoBlob."', '".$fotoNome."')";

    $result = mysqli_query($con, $sql);

    if($result)
    {
        echo "<br><br>Dados inseridos com sucesso!";
    }
    else
    {
        echo "<br><br>Erro ao inserir o banco de dados: ".mysqli_error($con);
    }
?>

<br><br><a href="index.php">Voltar</a>