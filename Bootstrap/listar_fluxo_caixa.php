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
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <title>Bootstrap</title>
        </head>
        <body>
            <h2 style="text-align: center;">Consulta de fluxo de caixa</h2>
            <div>
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="cadastro_fluxo_caixa.html">Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="listar_fluxo_caixa.php">Listagem</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="consulta_fluxo_caixa.html">Consulta</a>
                    </li>
                </ul>
            </div>     
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
                <td colspan="7" style="text-align: center;"><a href='index.php'>Voltar</a></td>
            </table>
        </body>
    </html>