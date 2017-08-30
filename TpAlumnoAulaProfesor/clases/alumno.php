<?php
    require_once "./clases/persona.php";

    class Alumno extends Persona{
        private $_numeroLibreta;

        public function __construct($pNombre, $pApellido, $pSexo, $pNumeroLibreta){
            parent::__construct($pNombre, $pApellido, $pSexo);
            $this->_numeroLibreta = $pNumeroLibreta;
        }

        public function MostrarDatos(){
            $datos = "";
            $datos .= "<br>Nombre: ".$this->_nombre."<br>Apellido: ".$this->_apellido;
            $datos .= "<br>Sexo: ".$this->_sexo."<br>Numero de libreta: ".$this->_numeroLibreta;

            return $datos;
        }

    }