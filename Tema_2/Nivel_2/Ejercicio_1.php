<?php

function calcularPagoLlamada(int $duracionMinutos) {
    if ($duracionMinutos < 3){
        return 10; 
    } else {
        $minutoAdicional = $duracionMinutos - 3;
        return 10 + ($minutoAdicional * 5);
    }
}

echo "El coste de la llamada es de ";
echo calcularPagoLlamada(10) . " centimos <br>";

echo "El coste de la llamada es de ";
echo calcularPagoLlamada(3) . " centimos <br>";

echo "El coste de la llamada es de ";
echo calcularPagoLlamada(2) . " centimos <br>";

?>
