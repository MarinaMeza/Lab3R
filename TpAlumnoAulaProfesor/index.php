<?php
    //echo "hoola";
    require_once "./clases/alumno.php";
    require_once "./clases/profesor.php";
    require_once "./clases/aula.php";
    require_once "./clases/instituto.php";

    $alumnoUno = new Alumno("Marina", "Meza", "F", 1234);
    $alumnoDos = new Alumno("Lucas", "Mascheroni", "M", 5678);
    $profesorUno = new Profesor("Roberto", "Gomez", "M", 7987);
    $listaAlumnos = array($alumnoUno, $alumnoDos);
    $aulaUno = new Aula("301", $listaAlumnos, $profesorUno);
    $nuevoInstituto = new Instituto("Los Pitagoricos");


    echo $aulaUno->MostrarPersonas();

?>