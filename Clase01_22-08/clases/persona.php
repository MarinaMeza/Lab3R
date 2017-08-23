<?php
    class Persona{
        
        public $nombre;
        public $apellido;
        public $dni;

        function __construct($nombre, $apellido="", $dni=0)
        {
            //el apellido asi es opcional, y todos los que le sigan, si le paso dni o telefono o asi despues,
            //van a ser opcionales. nombre es el unico obligatorio en este ejemplo

            $this->nombre = $nombre;
            
        }

        function Saludar()
        {
            echo "Hola<br>";
        }

        static function Mostrar()
        {
            //
        }
    }

?>