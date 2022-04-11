<?php
    $palavra = "banana";

    $novaPal = str_replace('a', 'x', $palavra);
    $novaPal = str_replace('e', 'x', $novaPal);
    $novaPal= str_replace('i', 'x', $novaPal);
    $novaPal= str_replace('o', 'x', $novaPal);
    $novaPal = str_replace('u', 'x', $novaPal);
    $novaPal = str_replace('A', 'x', $novaPal);
    $novaPal = str_replace('E', 'x', $novaPal);
    $novaPal = str_replace('I', 'x', $novaPal);
    $novaPal= str_replace('O', 'x', $novaPal);
    $novaPal = str_replace('U', 'x', $novaPal);
    echo $novaPal;
?>