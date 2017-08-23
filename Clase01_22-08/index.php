<?php
    require "./clases/persona.php";
    require "./clases/policia.php";

    Persona::Mostrar();

    $persona = new Persona("Marina");
    
    
    $persona->Saludar();

    $persona->Mostrar();

    Persona::saludar();
?>