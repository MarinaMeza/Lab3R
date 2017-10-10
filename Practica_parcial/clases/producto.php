<?php
    class producto{
        
        public $nombre;
        public $codigodeBarra;
        public $precio;
    
    
        public function __construct($pNombre, $pCodigoDeBarra, $pPrecio){
            $this->nombre = $pNombre;
            $this->codigoDeBarra = $pCodigoDeBarra;
            $this->precio = $pPrecio;
        }

        public static function Carga($pNombre, $pCodigoDeBarra, $pPrecio){
            $archivo = fopen('./archivos/Productos.txt','a');
            $producto = $pNombre.' - '.$pCodigoDeBarra.' - '.$pPrecio.PHP_EOL;
            fwrite($archivo, $producto);
            fclose($archivo);
        }

        
    }
?>