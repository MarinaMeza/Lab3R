<?php
    class Rectangulo extends figuraGeometrica{
        private $_ladoUno;
        private $_ladoDos;

        public function __construct($l1, $l2){
            $this->_ladoUno = $l1;
            $this->_ladoDos = $l2;
            $this->CalcularDatos();
        }

        protected function CalcularDatos(){
            $this->_superficie = $this->_ladoUno * $this->_ladoDos;
            $this->_perimetro = ($this->_ladoUno * 2) + ($this->_ladoDos * 2);
        }

        public function Dibujar(){
            $figura = '';

            for ($i=0; $i < $this->_ladoDos; $i++) { 
                for ($j=0; $j < $this->_ladoUno; $j++) { 
                    $figura .= '*';
                }
                $figura .= '<br>';
            }

            return $figura;
        }

        public function ToString(){
            echo "hola";
        }
    }
?>