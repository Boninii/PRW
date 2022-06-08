<?php
    include('conexao.php'); 

    $tipo = $_POST['tipo'];

    if($tipo == 'entrada')
    {
        $sql  = "select sum(valor) valor from fluxo_caixa where tipo = 'entrada'";
        echo $sql;
    }
    else if($tipo == 'saida')
    {
        $sql  = "select sum(valor) valor from fluxo_caixa where tipo = 'saida'";
    }
    else if($tipo == 'total')
    {
        $sql  = "select sum(case when tipo = 'entrada' then valor else  0 end) - 
                        sum(case when tipo = 'saida' then valor else 0 end) as valor
                        from fluxo_caixa";
        
    }
    $result = mysqli_query($con, $sql);

    if($result)
    {
        echo "Registro excluído com sucesso<br>";
    }
    else
    {
        echo "Erro ao tentar excluir usuário: ".mysqli_error($con)."<br>";
    }
?>