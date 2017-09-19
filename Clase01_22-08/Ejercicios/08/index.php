<?php
    $v[1] = 90;
    $v[30] = 7;
    $v['e'] = 99;
    $v['hola'] = 'mundo';
    
    $retorno = '';

    foreach ($v as $value) {
        $retorno .= $value."<br>";
    }
    
    echo $retorno;
?>