<?php

function mostrar_informacion() {
    echo "Este mensaje esta en la linea " . __LINE__ . ", del fichero " . __FILE__ . "<br><br>";
}

class Prueba {
    public function mostrar_nombre_clase_metodo() {
        echo "Este mensaje esta dentro del metodo " . __METHOD__ . ", de la classe " . __CLASS__;
    }
}

mostrar_informacion();
$prueba = new Prueba();
$prueba->mostrar_nombre_calse_metodo();

?>
