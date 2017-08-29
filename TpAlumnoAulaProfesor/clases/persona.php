<?php
    abstract class Persona{
        protected $nombre;
        protected $apellido;
        protected $sexo;

        public function __construct($pNombre, $pApellido, $pSexo){
            $this->nombre = $pNombre;
            $this->apellido = $pApellido;
            $this->sexo = $pSexo;
        }

        protected abstract function MostrarDatos();
    }