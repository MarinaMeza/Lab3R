<?php
var_dump($_FILES);
$im = imagecreatefrompng("fotoUno.png");
$estampa = imagecreatefrompng('fotoTres.png');//fotoDos.png

if ($_FILES['fotoUno']['type'] == "image/png" && $_FILES['fotoTres']['type']) {
    echo "Hola";
}
else
{ 
    echo "!Hola";
}

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
imagepng($im);
imagedestroy($im);


?>