<?php

$integer = 11;
$double = 1.1;
$string = "Test";
$boolean = true;

echo "El valor del integer es: " .$integer. "<br>";
echo "El valor del double es: " .$double. "<br>";
echo "El texto del string es: " .$string. "<br>";
echo "El boolean es: " . ($boolean ? 'true' : 'false') . "<br>";

define("NOMBRE", "Cristian Chaverra");
echo "<title>" .NOMBRE. "</title>";


?>