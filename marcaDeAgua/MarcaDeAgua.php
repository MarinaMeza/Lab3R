<?php
var_dump($_FILES);
$destino = "./fotoUno.png";
if ($_FILES['foto']['type'] == "image/png" && $_FILES['foto']['size'] > filesize('./fotoDos.png')) {
    echo "hola";
    move_uploaded_file($_FILES["foto"]["tmp_name"], $destino);
    //'C:/xampp/tmp/php2A4E.tmp','C:/xampp/htdocs/Prog3R.git/marcaDeAgua/');
}
/*
else
{ 
    //
}*/

$im = imagecreatefrompng("fotoUno.png");
$estampa = imagecreatefrompng('fotoTres.png');//fotoDos.png


// Establecer los márgenes para la estampa y obtener el alto/ancho de la imagen de la estampa
$margen_dcho = 400;//10
$margen_inf = 180;//10
$sx = imagesx($estampa);
$sy = imagesy($estampa);

// Copiar la imagen de la estampa sobre nuestra foto usando los índices de márgen y el
// ancho de la foto para calcular la posición de la estampa. 
imagecopy($im, $estampa, imagesx($im) - $sx - $margen_dcho, imagesy($im) - $sy - $margen_inf, 0, 0, imagesx($estampa), imagesy($estampa));

// Imprimir y liberar memoria
header('Content-type: image/png');
$nuevaImagen = "./".$_POST["usuario"].".png";
imagepng($im, $nuevaImagen);
imagedestroy($im);


?>