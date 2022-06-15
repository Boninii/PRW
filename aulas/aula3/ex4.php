<!DOCTYPE html>
    <html lang="pt-BR">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Exercício 4</title>
        </head>
        <body>
            <h1>Vendas parceladas</h1>
            <?php
            $preco = 100;//Valor do produto em reais

            echo "O valor do produto com 10% de desconto: R$".number_format($preco - ($preco * 0.1),2,',','.');
            echo "<br>O valor sem juros, em 5x: R$".number_format($preco / 5,2,',','.');
            echo "<br>O valor com juros, em 10x: R$".number_format(($preco * 0.2 + $preco) / 10,2,',','.');
            ?>
        </body>
    </html>