<?php
    require_once "./clases/persona.php";

    class Profesor extends Persona{
        private $numeroLegajo;

        public function __construct($pNombre, $pApellido, $pSexo, $pNumeroLegajo){
            parent::__construct($pNombre, $pApellido, $pSexo);
            $this->numeroLegajo = $pNumeroLegajo;
        }

        public function MostrarDatos(){
            $datos = "";
            $datos .= "<br>Nombre: ".$this->nombre."<br>Apellido: ".$this->apellido;
            $datos .= "<br>Sexo: ".$this->sexo."<br>Numero de legajo: ".$this->numeroLegajo;

            return $datos;
        }
    }