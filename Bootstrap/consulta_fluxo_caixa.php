<?php
    include('conexao.php'); 

    $tipo = $_POST['tipo'];

    if($tipo == 'entradas')
    {
        $sql  = "SELECT SUM(valor) valor FROM fluxo_caixa WHERE tipo = 'entrada'";
    }
    else if($tipo == 'saidas')
    {
        $sql  = "SELECT SUM(valor) valor FROM fluxo_caixa WHERE tipo = 'saida'";
    }
    else if($tipo == 'total')
    {
        $sql  = "SELECT SUM(CASE WHEN tipo = 'entrada' THEN valor ELSE 0 END) -
                    SUM(CASE WHEN tipo = 'saida' THEN valor ELSE 0 END) 
                    AS valor 
                    FROM fluxo_caixa";
        
    }
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    echo "Valor: R$".($row['valor']) ;
?>
<!-- Teste -->
<br><br><a href="index.php">Voltar</a>