<!DOCTYPE html>
    <html lang="pt_BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 2</title>
    </head>
    <body>
        <h1>Área de um círculo</h1>
        <?php
        $raio = 10;

        echo "Valor do raio: ".$raio;
        echo "<br>Valor da área: ".number_format(pow($raio, 2)*pi(),2,',','.');
        ?>
    </body>
    </html>