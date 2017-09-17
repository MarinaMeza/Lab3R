<?php

    class Fabrica
    {
        private $_empleados = array();
        private $_razonSocial;
        
        public function __construct($razonSocial)
        {
            $this->_razonSocial = $razonSocial;
        }

        public function AgregarEmpleado($persona)
        {
            array_push($this->_empleados, $persona);
            $this->ElimininarEmpleadosRepetidos();
        }

        public function EliminarEmpleado($persona)
        {
            $key = array_search($persona,$this->_empleados);

            if($key !== false)
            {
                unset($this->_empleados[$key]);
            }
        }

        private function ElimininarEmpleadosRepetidos()
        {
            $this->_empleados = array_unique($this->_empleados, SORT_REGULAR);
        }

        public function CalcularSueldos()
        {
            $acum = 0;

            foreach ($this->_empleados as $empleado) {
                $acum += $empleado->getSueldo();
            }

            return $acum;
        }

        public function ToString()
        {
            $datos = "";

            $datos .= $this->_razonSocial." <br> ";

            foreach ($this->_empleados as $empleado) {
                $datos .= $empleado->ToString();
            }

            $datos .= "<br>Total sueldos: ".$this->CalcularSueldos();
            
            return $datos;
        }
    }

?>