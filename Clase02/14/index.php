<?php
    function esPar($numero){
        $rta = 'TRUE';

        if (($numero % 2) > 0) {
            $rta = 'FALSE';
        }

        return $rta;
    }

    echo esPar($_POST['numero']);
?>