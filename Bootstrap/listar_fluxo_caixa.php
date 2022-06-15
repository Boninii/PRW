<?php
    include('conexao.php');

    $sql = 'SELECT * FROM fluxo_caixa';
    //retorna todos os dados para consulta
    $result = mysqli_query($con, $sql);
    
    //retorna a primeira linha
    //$row = mysqli_fetch_array($result);
    //print_r($row);
?>

<!DOCTYPE html>
    <html lang="pt_BR">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Prova 2</title>
        </head>
        <body>
            <h1 align="center">Consulta de fluxo de caixa</h1>
            <table align="center" border="1">
                <!--LInha-->
                <tr align="center">
                    <!--Table-->
                    <th>Código</th>
                    <th>Data</th>
                    <th>Tipo</th> 
                    <th>Valor</th>
                    <th>Histórico</th>
                    <th>Cheque</th>
                    <th>Excluir</th>
                </tr>
                <?php
                    while($row = mysqli_fetch_array($result))
                    {
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>"; 
                        echo "<td>".$row['data']."</td>";
                        echo "<td>".$row['tipo']."</td>";
                        echo "<td>".$row['valor']."</td>";
                        echo "<td><a href='altera_fluxo_caixa.php?id=".$row['id']."'>".$row['historico']."</a></td>";
                        echo "<td>".$row['cheque']."</td>";
                        echo "<td><a href='excluir_fluxo_caixa.php?id=".$row['id']."'>Excluir</a></td>";
                        echo "</tr>";
                    }
                ?>
                <td><a href='index.php'>Voltar</a></td>
            </table>
        </body>
    </html>