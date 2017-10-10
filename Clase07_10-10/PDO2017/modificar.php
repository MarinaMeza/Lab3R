<?php
    require_once './clases/cd.php';
    require_once './clases/AccesoDatos.php';

    $unCd = new cd();

    $unCd->id = $_POST['id'];
    $unCd->titulo = $_POST['titulo'];
    $unCd->cantante = $_POST['cantante'];
    $unCd->año = $_POST['anio'];

    $unCd->ModificarCd();
?>