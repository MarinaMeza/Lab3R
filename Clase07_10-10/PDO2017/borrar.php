<?php
    require_once './clases/cd.php';
    require_once './clases/AccesoDatos.php';

    $unCd = new cd();

    $unCd->cd = $_POST['id'];

    $unCd->BorrarCd();
?>