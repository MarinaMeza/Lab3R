<?php

    $dia = date('z') + 1;
    
    $datos = '';
    
    $datos .= date('d/m/Y');
    $datos .= '<br>';
    $datos .= date('j \of F \of Y');
    
/*
    if($dia >= 82 && $dia < 172){
        $datos .= '<br>Es otoño';
    }
    elseif ($dia >= 172 && $dia < 264) {
        $datos .= '<br>Es invierno';
    }
    elseif ($dia >= 264 && $dia < 355) {
        $datos .= '<br>Es primavera';
    }
    else{
        $datos .= '<br>Es verano';
    }*/

    switch (date('m')) {
        case 3:
        case 4:
        case 5:
            $datos .= '<br>Es otoño';
            break;
        case 6:
        case 7:
        case 8:
            $datos .= '<br>Es invierno';
            break;
        case 9:
        case 10:
        case 11:
            $datos .= '<br>Es primavera';
            break;
        default:
            $datos .= '<br>Es verano';
            break;
    }
    
    echo $datos;
?>