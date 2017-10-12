<?php
    function valPalabra($palabra, $max){
        $rta = 1;

        if(strlen($palabra) > $max){
            $rta = 0;
        }

        if($palabra != 'Recuperatorio' && $palabra != 'Parcial' && $palabra !='Programacion'){
            $rta = 0;
        }

        return $rta;
    }

    echo valPalabra($_POST['palabra'],$_POST['max']);

?>