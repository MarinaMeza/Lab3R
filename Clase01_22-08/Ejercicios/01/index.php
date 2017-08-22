<?php

    $num = 1;
    $acum = 0;
    $max = 1000;
    $cont = 0;
/*
    do{
        
        $acum += $num;
        
        
        if($acum>$max)
        {
            $acum -= $num;
            break;
        }
        echo $acum."<br>";
        $num++;
    }while($acum < $max);*/

    for ($i=1; ; $i++) { 
        $acum += $i;
        if($acum > $max){
            break;
        }
        $cont++;

        echo $acum."<br>";
        
    }
    echo "Numeros sumados: ".$cont;

?>