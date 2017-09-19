<?php
    $intArray = array();
    $acum = 0;
    $retorno = '';
    
    for ($i=0; $i < 5; $i++) { 
        $intArray[$i] = rand(1,15);
    }

    foreach ($intArray as $value) {
        $acum += $value;
    }

    if (($acum / 5) == 6) {
        $retorno = "El promedio es igual a 6";
    }else if (($acum / 5) > 6) {
        $retorno = "El promedio es mayor a 6";
    }else {
        $retorno = "El promedio es menor a 6";
    }

    echo $retorno;
?>