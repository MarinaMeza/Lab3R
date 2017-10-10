<?php

require_once "./clases/producto.php";

if (isset($_POST["nombre"]) && isset($_POST["codigoDeBarra"]))
{
    $nombre = $_POST["nombre"];
    $codigoDeBarra = $_POST["codigoDeBarra"];

    $precio = producto::TraerPrecio($nombre, $codigoDeBarra);
    if (!$precio)
    {
        echo "Error al recuperar el producto";
    }
    else
    {
        echo $precio;
    }
}
?>