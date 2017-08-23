<?php
    $fecha = date('d/m/Y');
    
    switch (date('m')) {
        case 3:
        case 4:
        case 5:
            # code...
            break;
        case 6:
        case 7:
        case 8:
            //
            break;
        case 9:
        case 10:
        case 11:
            //
            break;
        default:
            # code...
            break;
    }

    echo $fecha;
?>