<?php

function cribaEratostenes(int $numero) {

    $numeros = range(2, $numero);

    for ($i = 2; $i <= $numero; $i++) {
        // Verificar si el número $i sigue en el array
        if (isset($numeros[array_search($i, $numeros)])) {
            // Eliminar todos los múltiplos de $i mayores o iguales que ($i * $i)
            for ($j = $i * $i; $j <= $numero; $j += $i) {
                // Buscar el índice de $j en el array y eliminarlo
                $index = array_search($j, $numeros);
                if ($index !== false) {
                    unset($numeros[$index]);
                }
            }
        }
    }
    return array_values($numeros);
}

$primos = cribaEratostenes(100);
print_r($primos);

?>