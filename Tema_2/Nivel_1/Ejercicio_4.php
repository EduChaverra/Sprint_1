<?php

function contar($hasta_el_numero = 10, $cuenta = 1) {
    for ($i = 1; $i <= $hasta_el_numero; $i += $cuenta) {
        echo $i. " . ";
    }
}

echo "Conteo hasta el numero 10 de 1 en 1: <br>" ;
contar(10,1);
echo "<br><br> Conteo hasta el numero 10 de 2 en 2: <br>";
contar(10,2);
echo "<br><br> Conteo hasta el numero 20 de 1 en 1: <br>";
contar(20,1);
echo "<br><br> Conteo hasta el numero 20 de 3 en 3: <br>";
contar(20,3);

?>