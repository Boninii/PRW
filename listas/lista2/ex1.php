<?php
    $soma = 0;
     for($i=1; $i<=100; $i++)
     {
        if($i % 2 == 0)
        {
            $soma = $soma + $i;
        }
     }
     echo "A soma dos número pares de 0 a 100 é de: ".$soma;
?>