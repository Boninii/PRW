<?php
    include('conexao.php');

    $sql = 'SELECT * FROM agenda';
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
            <title>Listagem de Agendas</title>
        </head>
        <body>
            <h1 align="center">Listagem de Agendas</h1>
            <table align="center" border="1">
                <!--LInha-->
                <tr align="center">
                    <!--Table-->
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Apelido</th>
                    <th>Endereço</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                    <th>Email</th>
                    <th>Data de Cadastro</th>
                    <th>Excluir</th>
                </tr>
                <?php
                    while($row = mysqli_fetch_array($result))
                    {
                        echo "<tr>";
                        $data = explode("-",$row['dt_cadastro']);
                        echo "<td>".$row['id_agenda']."</td>";
                        echo "<td><a href='altera_agenda.php?id_agenda=".$row['id_agenda']."'>"
                            .$row['nome']."</a></td>";//pode n ser nome_agenda
                        echo "<td>".$row['apelido']."</td>";
                        echo "<td>".$row['endereco']."</td>";
                        echo "<td>".$row['bairro']."</td>";
                        echo "<td>".$row['cidade']."</td>";
                        echo "<td>".$row['estado']."</td>"; 
                        echo "<td>".$row['telefone']."</td>";
                        echo "<td>".$row['celular']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>" .$data[2]."/".$data[1]."/".$data[0]."</td>";
                        echo "<td><a href='excluir_agenda.php?id_agenda=".$row['id_agenda']."'>Excluir</a></td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </body>
    </html>