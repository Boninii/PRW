<?php
    $a = 5;
    $b = '5';

    //Verifica se os valrores são iguais
    print($a == $b);
    print("<br>");

    //Mostra qual é o tipo da váriavel que está entre parenteses
    print(gettype($a)."<br>");
    print(gettype($b)."<br>");

    //Verifica se os números e os tipos são iguais, 
    #Se forem iguais, é impresso o número "1", se não, não é impresso nada
    print($a === $b);
?>