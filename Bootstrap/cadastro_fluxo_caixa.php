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

    $data = $_POST['data'];
    $nome = $_POST['nome'];
    $tipo = $_POST['opcTipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];

    echo "Data: ".$data."<br>"
    ."Nome: ".$nome."<br>"
    ."Tipo: ".$tipo."<br>"
    ."Valor: ".$valor."<br>"
    ."Histórico: ".$historico."<br>"
    ."Cheque: ".$cheque."<br>"
    ."Foto: <br><img src='upload/$fotoNome' width=100>";
    if(isset($fotoBlob))
    {
        echo "Essa variável existe!";
    }
    else
    {
        echo "Essa variavél não existe!";
    }

    $sql = "INSERT INTO  fluxo_caixa (data, nome, tipo, valor, historico, cheque, foto_blob, foto_nome)
                VALUES ('".$data."', '".$nome."', '".$tipo."', '".$valor."', '".$historico."', '".$cheque."', '".$fotoBlob."', '".$fotoNome."')";

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
<br><br><a href="index.php">Voltar</a>