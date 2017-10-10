<?php

class producto
{
    public $nombre;
    public $codigoDeBarra;
    public $precio;

    public function __construct($nombre, $codigoDeBarra = "", $precio = "")
    {
        $this->nombre = $nombre;
        $this->codigoDeBarra = $codigoDeBarra;
        $this->precio = $precio;
    }

    public static function Guardar($nombre, $codigoDeBarra, $precio)
    {
        $archivo = fopen("./archivos/Productos.txt", "a");
        $renglon = $nombre."_".$codigoDeBarra."_".$precio."\n";
        fwrite($archivo, $renglon);
        fclose($archivo);
    }

    public static function TraerPrecio($nombre, $codigoDeBarra)
    {
        $arrayProductos = self::RetornarArrayProductos();
        foreach ($arrayProductos as $producto)
        {
            if ($nombre == $producto->nombre && $codigoDeBarra == $producto->codigoDeBarra)
                return $producto->precio;
        }
        return false;
    }

    public static function CrearTablaProductos()
    {
        $lista = self::RetornarArrayProductos();
		$archivo = fopen("./archivos/Productos.php", "w");
		$tablaCompleta="<table border=1><th> Nombre </th><th> Código de barra </th><th> Precio </th>";
		$renglon="";
		
		foreach ($lista as $producto) 
		{
			$renglon .= "<tr> <td> ".$producto->nombre ." </td> <td> ". $producto->codigoDeBarra."</td> <td> ". $producto->precio."</td> </tr>" ; 
		
  		}
		$tablaCompleta .= $renglon." </table>";

        return $tablaCompleta;
    }

    private static function RetornarArrayProductos()
    {
        $arrayProductos = array();
        $archivo = fopen("./archivos/Productos.txt", "r");
        while (!feof($archivo))
        {
            $renglon = fgets($archivo);
            //evito que agregue al array el último renglón vacío
            if ($renglon != null)
            {
                $producto = explode("_", $renglon);
                $objProducto = new producto($producto[0], $producto[1], $producto[2]);
                array_push($arrayProductos, $objProducto);
            }
        }
        fclose($archivo);
        return $arrayProductos;
    }

    public static function Modificar($nombre, $codigoDeBarra, $precio, $foto)
    {
        $band = false;
        $destino = "./FotosProductos/".$codigoDeBarra.".png";
        $arrayProductos = self::RetornarArrayProductos();
        foreach ($arrayProductos as $producto)
        {
            if ($codigoDeBarra == $producto->codigoDeBarra)
            {
                $producto->nombre = $nombre;
                $producto->precio = $precio;
                $band = true;
                break;
            }
        }
        //si existe el producto y la imagen es .png entro, sino no hago nada
        if ($band && $foto["type"] == "image/png")
        {
            self::GuardarListado($arrayProductos);
            move_uploaded_file($foto["tmp_name"], $destino);
        }
        return $band;
    }

    private static function GuardarListado($arrayProductos)
    {
        $texto = "";
        $archivo = fopen("./archivos/Productos.txt", "w");
        foreach ($arrayProductos as $producto)
        {
            $texto .= $producto->nombre."_".$producto->codigoDeBarra."_".$producto->precio."\n";
        }
        fwrite($archivo, $texto);
        fclose($archivo);
    }
}
?>