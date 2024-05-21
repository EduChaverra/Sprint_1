<?php

$texto1 = "Hello World!";
echo $texto1. "<br><br>";

$texto1_mayusculas = strtoupper($texto1);
echo $texto1_mayusculas . "<br><br>";

echo "La longitud de " . $texto1 . " es: " . strlen($texto1). "<br><br>";

$texto1_inverso = strrev($texto1);
echo $texto1_inverso . "<br><br>";

$texto2 = "Este es el curso de PHP";
echo $texto1 . " " . $texto2;

?>