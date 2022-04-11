<?php
    $data = date('d-m-Y');
    $dia = substr($data, 0, 2);
    $mes = substr($data, 3, 2);
    $ano = substr($data, 6, 4);

    echo $dia."<br>".$mes."<br>".$ano."<br>";
    echo $dia."/".$mes."/".$ano;
?>