<?php
    $cont=0;

    for($i=1; $i<200; $i++)
    {
        for($n=1; $n<$i; $n++)
        {
            if($i % $n == 0)
            {
                $cont++;
            }
        }
        if($cont == 1)
                {
                    echo $i."<br>";
                }
        $cont=0;
    }
?>