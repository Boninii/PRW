<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Exercício 3</title>
        </head>
        <body>
            <h1>Multa</h1>
            <?php
            $vMax = 100;//Velocidade máxima permitida na avenida
            $vMot = 200;//Velocidade que o motorista estava dirigindo
            $porcent = $vMot * 100 / $vMax - 100;

            echo "A velocidade permitida é de: ".$vMax;
            echo "<br>A velocidade que o motorista estava era de: ".$vMot;

            if($porcent == 10)
                echo "<br>A multa será de 50 reais!";
                else if($porcent > 10 and $porcent <= 20)
                    echo "<br>A multa será de 100 reais!";
                    else if($porcent > 20)
                    echo "<br>A multa será de 200 reais!";
                    else
                    echo "<br>Você não será multado!"
            ?>
        </body>
    </html>