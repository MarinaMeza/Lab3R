<?php
    require_once "./clases/persona.php";

    class Alumno extends Persona{
        private $numeroLibreta;

        public function __construct($pNombre, $pApellido, $pSexo, $pNumeroLibreta){
            parent::__construct($pNombre, $pApellido, $pSexo);
            $this->numeroLibreta = $pNumeroLibreta;
        }

        public function MostrarDatos(){
            $datos = "";
            $datos .= "<br>Nombre: ".$this->nombre."<br>Apellido: ".$this->apellido;
            $datos .= "<br>Sexo: ".$this->sexo."<br>Numero de libreta: ".$this->numeroLibreta;

            return $datos;
        }

    }