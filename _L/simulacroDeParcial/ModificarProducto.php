<?php

require_once "./clases/producto.php";

if (isset($_POST["nombre"]) && isset($_POST["codigoDeBarra"]) && isset($_POST["precio"]) && isset($_FILES["foto"]))
{
    $nombre = $_POST["nombre"];
    $codigoDeBarra = $_POST["codigoDeBarra"];
    $precio = $_POST["precio"];
    $foto = $_FILES["foto"];
    
    producto::Modificar($nombre, $codigoDeBarra, $precio, $foto);
}

?>