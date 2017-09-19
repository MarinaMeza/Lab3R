<?php
    $numero = $_POST["numero"];
    $numeroStr[] = '';
    $retorno = '';

    $numeroStr = $numero;

    if ($numero < 20 || $numero > 60) {
        $retorno = "El numero debe estar entre 20 y 60";
    }
    else {
        if($numero == 20)
        {
            $retorno = "Veinte";
        }
        else{
            switch ($numeroStr[0]) {
                case 2:
                    $retorno = "Veinti";
                    break;
                case 3:
                    $retorno = "Treinta";
                    break;
                case 4:
                    $retorno = "Cuarenta";
                    break;
                case 5:
                    $retorno = "Cincuenta";
                    break;
                case 6:
                    $retorno = "Sesenta";
                    break;
            }
            if ($numeroStr[0] != 2 && $numero % 2 != 0) {
                $retorno .= " y ";
            }
            switch ($numeroStr[1]) {
                case 1:
                $retorno .= "uno";
                break;
            case 2:
                $retorno .= "dos";
                break;
            case 3:
                $retorno .= "tres";
                break;
            case 4:
                $retorno .= "cuatro";
                break;
            case 5:
                $retorno .= "cinco";
                break;
            case 6:
                $retorno .= "seis";
                break;
            case 7:
                $retorno .= "siete";
                break;
            case 8:
                $retorno .= "ocho";
                break;
            case 9:
                $retorno .= "nueve";
                break;
            }
        }
    }
    echo $retorno;
?>