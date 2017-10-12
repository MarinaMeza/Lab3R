<?php

    $arrayLapiceras = array(
        'lapiceraUno' => array(
            'color' => 'verde',
            'marca' => 'bic',
            'trazo' => 'fino',
            'precio' => 3.99
        ),
    
        'lapiceraDos' => array(
            'color' => 'azul',
            'marca' => 'faber',
            'trazo' => 'grueso',
            'precio' => 5.5
        ),
    
        'lapiceraTres' => array(
            'color' => 'negro',
            'marca' => 'bic',
            'trazo' => 'fino',
            'precio' => 2.99
        )
    );

    foreach ($arrayLapiceras as $row => $innerArray) {
        foreach ($innerArray as $innerRow => $value) {
            var_dump($value);
        }
    }

    
    echo '<br>';
    
    $otroArrayLapiceras = array(
        array(
            'color' => 'verde',
            'marca' => 'bic',
            'trazo' => 'fino',
            'precio' => 3.99
        ),
        array(
            'color' => 'azul',
            'marca' => 'faber',
            'trazo' => 'grueso',
            'precio' => 5.5
        ),
        array(
            'color' => 'negro',
            'marca' => 'bic',
            'trazo' => 'fino',
            'precio' => 2.99
        )
    );

    foreach ($otroArrayLapiceras as $row => $innerArray) {
        foreach ($innerArray as $innerRow => $value) {
            var_dump($value);
        }
    }
?>