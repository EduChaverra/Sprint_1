<?php

$x = 2;
$y = 3;
$n = 2.5;
$m = 3.5;

echo "El valor de X es " . $x . " y el valor de Y es " . $y . "<br>";
echo "X + Y = " . ($x + $y) . "<br>";
echo "X - Y = " . ($x - $y) . "<br>";
echo "El producto de X por Y es: " . ($x * $y) . "<br>";
echo "El modulo de X dividido Y es: " . ($x % $y) . "<br><br>";

echo "El valor de N es " . $n . " y el valor de M es " . $m . "<br>";
echo "N + M = " . ($n + $m) . "<br>";
echo "N - M = " . ($n - $m) . "<br>";
echo "El producto de N por M es: " . ($n * $m) . "<br>";
echo "El modulo de N dividido M es: " . ($n % $m) . "<br><br>";

echo "El doble de X: " . ($x * 2) . "<br>"; //($x *= $x)?
echo "El doble de Y: " . ($y * 2) . "<br>";
echo "El doble de N: " . ($n * 2) . "<br>";
echo "El doble de M: " . ($m * 2) . "<br>";
echo "La suma de todas las variables: " . ($x + $y + $n + $m) . "<br>";
echo "El producto de todas las variables: " . ($x * $y * $n * $m) . "<br><br>";

function Calculadora($num1, $num2, $operacion) {
    switch ($operacion) {
        case 'suma':
            return $num1 + $num2;
            break;
        case 'resta':
            return $num1 - $num2;
            break;
        case 'multiplicacion':
            return $num1 * $num2;
            break;
        case 'division':
            return $num1 / $num2;
            break;
        default:
            return "Esta operacion no esta disponible";
            break;
    }
}

echo "Calculadora($x, $y, 'suma')";

?>