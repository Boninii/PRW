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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#" style="pointer-events: none;">Menu Principal</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="cadastro_fluxo_caixa.html">Cadastro<span class="sr-only">(página atual)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listar_fluxo_caixa.php">Listagem</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="consulta_fluxo_caixa.html">Consulta</a>
                        </li>
                        <!--<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Ação</a>
                                <a class="dropdown-item" href="#">Outra ação</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Algo mais aqui</a>
                            </div>
                        </li>-->
                    </ul>
                    <!--<form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                    </form>-->
                </div>
            </nav>
            <br>     
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