<?php

function verificar_grado($nota){

    if ($nota >= 60) {
        return "El estudiante pasa a primera division";
    } else if ($nota >= 45 && $nota <= 59) {
        return "El estudiante pasa a segunda division";
    } else if ($nota >= 33 && $nota <= 44) {
        return "El estudiante pasa a tercera division";
    } else {
        return "El estudiante ha reprovado";
    }
}

echo verificar_grado(90);

?>