<?php
    abstract class Persona{
        protected $_nombre;
        protected $_apellido;
        protected $_sexo;

        public function __construct($pNombre, $pApellido, $pSexo){
            $this->_nombre = $pNombre;
            $this->_apellido = $pApellido;
            $this->_sexo = $pSexo;
        }

        protected abstract function MostrarDatos();
    }