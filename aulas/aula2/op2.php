<?php
	$a = 1;

	//Primeiro incrementa depois imprime
	print(++$a."<br>");//Pré-incremento

	//Primeiro imprime depois incrementa
	print($a++."<br>");//Pós-incremento

    //Resultado - Já incrementado
	print($a."<br>");

    ++$a;
    print($a."<br>");
    $a++;
    print($a."<br>");
?>