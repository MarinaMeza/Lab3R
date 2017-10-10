<?php
    require_once './clases/cd.php';
    require_once './clases/AccesoDatos.php';

    $listaCd = cd::TraerTodoLosCds();
    $tablaCompleta = "<table border=1><th>Titulo</th><th>Cantante</th><th>Año</th>";

    foreach ($listaCd as $cd ) {
        $tablaCompleta .= "<tr> <td>".$cd->titulo."</td><td>".$cd->cantante."</td><td>".$cd->año."</td></tr>";
    }

    $tablaCompleta .= "</tabla>";

    echo $tablaCompleta;
?>