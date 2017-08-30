<?php
    require_once "./clases/persona.php";

    class Profesor extends Persona{
        private $_numeroLegajo;

        public function __construct($pNombre, $pApellido, $pSexo, $pNumeroLegajo){
            parent::__construct($pNombre, $pApellido, $pSexo);
            $this->_numeroLegajo = $pNumeroLegajo;
        }

        public function MostrarDatos(){
            $datos = "";
            $datos .= "<br>Nombre: ".$this->_nombre."<br>Apellido: ".$this->_apellido;
            $datos .= "<br>Sexo: ".$this->_sexo."<br>Numero de legajo: ".$this->_numeroLegajo;

            return $datos;
        }
    }