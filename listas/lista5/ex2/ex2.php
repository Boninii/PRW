<?php
    $produtos = array('mouse', 'teclado', 'mousepad', 'monitor', 'webcam', 'headset', 'fone', 'caixinha de som', 'microfone');
    $preços = array('100', '200', '80', '1500', '700', '150', '80', '90', '170');
    $pesquisa = $_GET['txtPesquisa'];
    $pesquisa = strtolower($pesquisa);

    $indice = array_search($pesquisa, $produtos);
    $indice++;
    if($indice) {
        echo "<br>Produto encontrado!<br>Código do produto: ".($indice-1)."<br>Preço: R$".number_format($preços[$indice-1], 2, ",", ".");
    } else {
        echo "<br>Produto não encontrado!";
    }
?>