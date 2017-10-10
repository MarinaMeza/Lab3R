<?php
    require_once './clases/producto.php';
  
    if(isset($_GET['nombre']) && isset($_GET['codigoDeBarra']) && isset($_GET['precio']))
    {
        $nombre = $_GET['nombre'];
        $codigoDeBarra = $_GET['codigoDeBarra'];
        $precio = $_GET['precio'];

        producto::Carga($nombre, $codigoDeBarra, $precio);
    }
?>