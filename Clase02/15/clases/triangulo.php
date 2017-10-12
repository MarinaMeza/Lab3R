<?php
    class Triangulo extends figuraGeometrica{
        private $_altura;
        private $_base;

        public function __construct($a, $b){
            $this->_altura = $a;
            $this->_base = $b;
            $this->CalcularDatos();
        }

        protected function CalcularDatos(){
            $this->_superficie = ($this->_base * $this->_altura) / 2;
            $this->_perimetro = ($this->_base * 2) + $this->_altura;
        }

        public function Dibujar(){
            $figura = '';
            $aux = $this->_altura;

            for ($i=0; $i < $this->_altura; $i++) { 
                $figura .= str_repeat('&nbsp;', $aux);
                $aux--;
                for ($j=0; $j < $this->_base; $j++) { 
                    $figura .= '*';
                    if($i <= $j){
                        break;
                    }
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