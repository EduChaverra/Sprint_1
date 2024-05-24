<?php

$enteros = array (1,2,3,4,5,6,7,8,9);

function esPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= $numero / 2; $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

function sumar($acumulado,$numero){
    return  $acumulado + $numero;

}

$primos = array_filter($enteros,'esPrimo');

$sumaPrimos = array_reduce($primos,'sumar');

print_r ($sumaPrimos);

?>