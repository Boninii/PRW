<?php
    $nome = $_POST["nome"]; 
    $estado = $_POST["estado"];
    $cpf= $_POST["cpf"];
    $rg = $_POST["rg"]; 
    $sexo = $_POST["opcSexo"];
    $saldo = $_POST["saldo"];
    $tot = $_POST["tot"];
 
    echo "Informações digitadas<br>Nome: ".$nome.
    "<br>"."Estado: ".$estado.
    "<br>"."CPF: ".$cpf.
    "<br>"."RG: ".$rg.
    "<br>"."Sexo: ".$sexo.
    "<br>"."Saldo: R$".number_format($saldo,2,',','.').
    "<br>"."Total da compra: R$".number_format($tot,2,',','.');

    echo "<br><br><br>Validação";

    if($nome == empty(true))
    {
        echo "<br>Nome: Precisa ser adicionado";
    }
    else
    {
        echo "<br>Nome: Validado!";
    }
    if($cpf == empty(true))
    {
        echo "<br>CPF: Precisa ser adicionado";
    }
    else
    {
        echo "<br>CPF: Validado!";
    }
    if($rg == empty(true))
    {
        echo "<br>RG: Precisa ser adicionado";
    }
    else
    {
        echo "<br>RG: Validado!";
    }


    echo "<br><br><br>Informações sobre o saldo";

    if($saldo > $tot)
    {
        $novoSaldo = $saldo - $tot;
        echo "<br>Seu novo saldo é de: R$".number_format($novoSaldo,2,',','.');
    }
    else
    {
        if($saldo < $tot)
        {
            echo "<span style='color:red'><br>Saldo Insuficiente para Concluir Compra!";
            echo "</span>";
        }
    }
?>