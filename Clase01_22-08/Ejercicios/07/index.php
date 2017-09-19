<?php
    $intArray = array();
    $retorno = '';

    for ($i=1; ; $i++) { 
        if($i / 2 != 0){
            array_push($intArray,$i);
        }
        if(count($intArray) == 10)
        {
            break;
        }
    }
    $retorno .= "for<br>";

    for ($i=0; $i < 10; $i++) { 
        $retorno .= $intArray[$i]."<br>";
    }

    $retorno .= "while<br>";

    $i = 0;
    while ($i < 10) {
        $retorno .= $intArray[$i]."<br>";
        $i++;
    }

    $retorno .= "foreach <br>";
    foreach ($intArray as $value) {
        $retorno .= $value."<br>";
    }

    echo $retorno;
?>