<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $opc = $_POST['opcao'];

   if($opc == "Somar")
   {
       echo ($num1 + $num2);
   }
   else
   {
        if($opc == "Subtrair")
        {
            echo ($num1 - $num2);
        }
        else
        {
            if($opc == "Dividir")
            {
                echo ($num1 / $num2);
            }
            else
            {
                if($opc == "Multiplicar")
                {
                    echo ($num1 * $num2);
                }
            }
        }
   }
?>