<?php
    $a = rand(1,10);
    $b = rand(1,10);
    $c = rand(1,10);

    $datos = '';

    //$datos .= 'A='.$a.' B='.$b.' C='.$c."<br>";

    if($a == $b || $a == $c || $b == $c)
    {
        $datos .= 'No hay valor del medio';
    }
    if($a > $b && $a < $c || $a < $b && $a > $c)
    {
        $datos .= $a;
    }
    if($b > $a && $b < $c || $b < $a && $b > $c)
    {
        $datos .= $b;
    }
    if($c > $b && $c < $a || $c < $b && $c > $a)
    {
        $datos .= $c;
    }
    echo $datos;

?>