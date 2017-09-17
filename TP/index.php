<?php

    require_once "./clases/persona.php";
    require_once "./clases/empleado.php";
    require_once "./clases/fabrica.php";

    $empleado01 = new Empleado("Marina", "Meza", 123456789, "F", 456, 1000000);
    $empleado02 = new Empleado("Gabriel", "Mendoza", 456789123, "M", 789, 1000000);
    $empleado03 = new Empleado("Celia", "Meza", 789123456, "F", 123, 1000000);
    $empleado04 = new Empleado("Susana", "Perez", 147258369, "F", 258, 1000000);
    $empleado05 = new Empleado("Marina", "Meza", 123456789, "F", 456, 1000000);
    $empleado06 = new Empleado("Gabriel", "Mendoza", 456789123, "M", 789, 1000000);
    $empleado07 = new Empleado("Marina", "Meza", 123456789, "F", 456, 1000000);
    $empleado08 = new Empleado("Fidel", "Meza", 258369147, "M", 369, 1000000);

    $unaFabrica = new Fabrica("La Fabrica");

    $unaFabrica->AgregarEmpleado($empleado01);
    $unaFabrica->AgregarEmpleado($empleado02);
    $unaFabrica->AgregarEmpleado($empleado03);
    $unaFabrica->AgregarEmpleado($empleado04);
    $unaFabrica->AgregarEmpleado($empleado05);
    $unaFabrica->AgregarEmpleado($empleado06);
    $unaFabrica->AgregarEmpleado($empleado07);
    $unaFabrica->AgregarEmpleado($empleado08);
    

    $datos = "";
    
    $datos .= $empleado01->ToString();
    $datos .= $empleado01->Hablar("Ingles");
    $datos .= "<br>Nombre: ".$empleado01->getNombre();
    $datos .= "<br>Apellido: ".$empleado01->getApellido();
    $datos .= "<br>DNI: ".$empleado01->getDni();
    $datos .= "<br>Sexo: ".$empleado01->getSexo();
    $datos .= "<br>Legajo: ".$empleado01->getLegajo();
    $datos .= "<br>Sueldo: ".$empleado01->getSueldo();
    $datos .= "<br>";
    $datos .= "<br> FABRICA  <br>".$unaFabrica->ToString();
    
    echo $datos;
?>