<?php
    $palavra = " Ciência da  Computação ";
    echo $palavra;
    echo "<br>"."A variável contém: ".strlen($palavra)." caracteres"."<br>";//strlen fala quantos caracteres tem 
    $palavra = trim($palavra);//Remove os espaços
    echo "A variável contém: ".strlen($palavra)." caracteres";
?>