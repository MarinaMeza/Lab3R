<?php
    $operador = $_POST["operador"];

    $op1 = rand(1,15);
    $op2 = rand(1,15);

    $resultado = null;

    $resultado.= $op1.$operador.$op2.'=';
    switch ($operador) {
        case '+':
            $resultado = $op1 + $op2;
            break;
        case '-':
            $resultado = $op1 - $op2;
            break;
        case '*':
            $resultado = $op1 * $op2;
            break;
        case '/':
            $resultado = $op1 / $op2;
            break;
    }

    echo $resultado;

?>