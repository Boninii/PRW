<?php
    $salario = 400;
    $reajuste = 0;

    echo "O salário é de: ".$salario;

    if($salario <= 300)
    {
        echo "<br>O reajuste salarial é de: ".($reajuste = $salario * 0.5);
        echo "<br>O salário atual é de: ".($salario + $reajuste);
    }
    else
    {
        if($salario > 300)
        {
            echo "<br>O reajuste salarial é de: ".($reajuste = $salario * 0.3);
            echo "<br>O salário atual é de: ".($salario + $reajuste);
        }
    }
?>