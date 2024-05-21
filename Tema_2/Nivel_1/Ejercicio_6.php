<?php

function is_bitten () {

    $probabilidad = rand(0,1);

    if ($probabilidad == 0) {
        return "Te ha mordido";
    } else {
        return "No te ha mordido";
    }
}

echo is_bitten();

?>