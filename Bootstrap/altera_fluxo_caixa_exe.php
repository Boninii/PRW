<?php
    include('conexao.php');
  
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

    $id = $_POST['id'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];

    echo "<h2>Alteração do Fluxo de caixa</h2>";

    if(strlen($fotoNome) > 0)
    {
        $sql = "UPDATE fluxo_caixa SET
                data = '".$data."',
                tipo = '".$tipo."',
                valor = '".$valor."',
                historico = '".$historico."',
                cheque = '".$cheque."',
                foto_blob = '".$fotoBlob."',
                foto_nome = '".$fotoNome."'
                WHERE id = ".$id;
    }
     else
    {
        $sql = "UPDATE fluxo_caixa SET
            data = '".$data."',
            tipo = '".$tipo."',
            valor = '".$valor."',
            historico = '".$historico."',
            cheque = '".$cheque."'
            WHERE id = ".$id;
    }

    $result = mysqli_query($con, $sql);

    if($result)
    {
        echo "Dados alterados com sucesso <br>";
    }
    else
    {
        echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";
    }
?>

<br><a href="index.php">Voltar</a>