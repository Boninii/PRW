<?php
    include('conexao.php');   
                
    $id = $_GET['id'];
    $sql = 'SELECT * FROM fluxo_caixa WHERE id ='.$id;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Teste - Aula</title>
    </head>
    <body>
        <form method="post" action="altera_fluxo_caixa_exe.php" enctype="multipart/form-data">
            <h2>Alteração do Fluxo de caixa</h2>
            <div>
                Data: 
                <input type="text" name="data" maxlength="10" value="<?php echo $row['data'] ?>">
            </div>
            <div>
                Tipo: 
                <input type="radio" name="tipo" value="Entrada" <?php if($row['tipo'] == "Entrada")  echo "checked";?>>Entrada
                <input type="radio" name="tipo" value="Saída" <?php if($row['tipo'] == "Saída")  echo "checked";?>>Saída
                <!--Mudei Entrada para entarda e Saída para saida-->
            </div>
            <div>
                Valor: 
                <input type="text" name="valor" maxlength="15" value="<?php echo $row['valor'] ?>">
            </div>
            <div>
                Histórico: 
                <input type="text" name="historico" maxlength="150" value="<?php echo $row['historico'] ?>">
            </div>
            <div>
                Cheque: 
                <select name="cheque">
                    <option <?php if($row['cheque'] == "Sim")  echo "selected";?>>Sim</option>
                    <option <?php if($row['cheque'] == "Não")  echo "selected";?>>Não</option>
                </select>
            </div>
            <div>
                <input type="file" id="foto" name="foto" accept="image/*">
            </div>
            <input type="submit" value="Enviar!">
            <input name="id" type="hidden" value="<?php echo $row['id']?>">
        </form>
    </body>
</html>
