<?php
    include('conexao.php');
  
    $id = $_POST['id'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];

    echo "<h2>Alteração do Fluxo de caixa</h2>";

    $sql = "UPDATE fluxo_caixa SET
                data = '".$data."',
                tipo = '".$tipo."',
                valor = '".$valor."',
                historico = '".$historico."',
                cheque = '".$cheque."'
                WHERE id = ".$id;

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
<!--Teste-->
<br><a href="index.php">Voltar</a>