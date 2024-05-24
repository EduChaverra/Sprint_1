<?php

$strings = array('lapiz', 'papel', 'boli', 'libreta', 'borrador');

function caracteresPares($string){
    $par = strlen($string) % 2 == 0;
    return $par;
}

$pares = array_filter($strings,'caracteresPares');

print_r ($pares);

?>