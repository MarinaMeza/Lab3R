<?php
    $cadena = '';

    for ($i=1; $i <= 4; $i++) { 
        for ($j=1; $j <= 4; $j++) { 
            $cadena .= $i.'^'.$j.'='.potencia($i, $j).'<br>';
        }
    }

    echo $cadena;

    function potencia($num, $exp){
        return pow($num, $exp);
    }
?>