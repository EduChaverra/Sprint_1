<?php

function verificarCaracter($palabras,$caracter) {
    foreach($palabras as $palabra){
        $idEncontrado = false;
        for ($i = 0; $i < strlen($palabra); $i++) {
            if ($palabra[$i] === $caracter) {
                $idEncontrado = true;
                break;
            }
        }
        if (!$idEncontrado) {
            return false;
        }
    }
    return true;
    
 }


$palabras = array("Pablo", "Pedro", "Paco");
$caracter = "p";

if (verificarCaracter($palabras,$caracter)) {
    echo "Todas las palabras tienen la letra " . $caracter;
} else {
    echo "No todas las palabras tienen la letra " . $caracter;
}


?>