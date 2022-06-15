<?php
	$nota = 7.5;
	$frequencia = 65;
	$aprovado = ($nota > 7 and $frequencia > 75);
	print(var_export($aprovado) . "<br>");

	$aprovado = ($nota > 7 or $frequencia > 75);
	print(var_export($aprovado) . "<br>");
?>