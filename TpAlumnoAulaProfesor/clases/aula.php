<?php
    require_once "./clases/IMostrarPersonas.php";

    class Aula implements IMostrarPersonas{
                
        private $aula;
        private $alumnos;
        private $profesor;

        public function __construct($pAula, $pAlumnos, $pProfesor){
            $this->aula = $pAula;
            $this->alumnos = $pAlumnos;
            $this->profesor = $pProfesor;
        }

        public function MostrarPersonas(){
            $datos = "";
            $datos .= "Alumnos: ";

            foreach ($this->alumnos as $value) {
                $datos .= $value->MostrarDatos();
            }

            $datos .= "<br>Profesor: ".$this->profesor->MostrarDatos();
            
            return $datos;
    }
}    