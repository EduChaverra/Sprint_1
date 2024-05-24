<?php

$enteros = array (1,2,3,4,5);

function calcularCubo(int $numero){
    $cubo = $numero * $numero * $numero;
    return $cubo;
}

$cubos = array_map('calcularCubo',$enteros);

print_r($cubos);

?>