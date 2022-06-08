<?php
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $imc = ($peso / ($altura * $altura));

    echo "Seu IMC é igual a: ".number_format($imc,2,',','.')."<br>";

    if($imc < 17)
    {
        echo "Situação: MUITO ABAIXO DO PESO!!!";
    }
    else
    {
        if($imc >= 17 and $imc <= 18.49)
        {
            echo "Situação: ABAIXO DO PESO!!!";
        }
        else
        {
            if($imc >= 18.5 and $imc <= 24.99)
            {
                echo "Situação: PESO NORMAL!!!";
            }
            else
            {
                if($imc >= 25 and $imc <= 29.99)
                {
                    echo "Situação: ACIMA DO PESO!!!";
                }
                else
                {
                    if($imc >= 30 and $imc <= 34.99)
                    {
                        echo "Situação: OBESIDADE I!!!";
                    }
                    else
                    {
                        if($imc >= 35 and $imc <= 39.99)
                        {
                            echo "Situação: OBESIDADE II (severa)!!!";
                        }
                        else
                        {
                            if($imc >= 40)
                            {
                                echo "Situação: OBESIDADE III (mórbida)!!!";
                            }
                        }
                    }
                }
            }
        }
    }
?>