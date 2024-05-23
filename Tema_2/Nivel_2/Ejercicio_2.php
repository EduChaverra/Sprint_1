<?php
 
 class Compra {

    private $total = 0;

    function addProducto(string $producto, int $cantidad){

        $precioProducto = array ("chocolate"=>1, "chicles"=>0.5, "caramelos"=>1.5);

        if (array_key_exists($producto, $precioProducto)) {
            $this->total += $precioProducto[$producto] * $cantidad;
        }
    }

    function obtenerTotal(){
        return $this->total;
    }
}

$compra1 = new Compra();
$compra1->addProducto("chocolate", 2);
$compra1->addProducto("chicles", 4);
$compra1->addProducto("caramelos", 2);

echo "Total " . $compra1->obtenerTotal() . "€";

?>