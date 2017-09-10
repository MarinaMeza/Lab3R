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
            array_unique($this->_empleados);
        }

        public function CalcularSueldos()
        {
            $acum = 0;

            foreach ($this->_empleados as $empleado) {
                $acum += $empleado->_sueldo;
            }

            return $acum;
        }

        public function ToString()
        {
            $datos = "";

            $datos .= $this->_razonSocial." - ";

            foreach ($this->_empleados as $empleado) {
                $datos .= $empleado->ToString();
            }
        }
    }

?>