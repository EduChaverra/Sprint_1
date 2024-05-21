<?php
require("Shape.php");
require("Triangulo.php");
require("Rectangulo.php");


$triangulo = new Triangulo(3,4);
echo "El area del triangulo es: " . $triangulo->area() . "<br>";

$rectangulo = new rectangulo(3,4);
echo "El area del rectangulo es: " . $rectangulo->area();

?>