<?php
    require_once './clases/figuraGeometrica.php';
    require_once './clases/rectangulo.php';
    require_once './clases/triangulo.php';


    $miRectangulo = new Rectangulo($_POST['lado1'], $_POST['lado2']);
    $miTriangulo = new Triangulo($_POST['lado1'], $_POST['lado2']);
    
    echo $miRectangulo->Dibujar();
    echo '-----------------------------<br>';
    echo $miTriangulo->Dibujar();
?>