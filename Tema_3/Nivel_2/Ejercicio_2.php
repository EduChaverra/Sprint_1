<?php

$notasAlumnos = array ("Ana" => [7, 8, 9, 6, 10],"Juan" => [5, 6, 7, 8, 9],"Maria" => [9, 9, 8, 8, 9],"Luis" => [6, 5, 7, 6, 7],"Laura" => [8, 8, 9, 10, 7]);

// Función para calcular y mostrar la media de las notas de cada alumno y la media de la clase
function calcularMedias($notasAlumnos) {
    
    $mediaAlumno = 0;
    $mediaClase = 0;
    $totalAlumnos = count($notasAlumnos);
    
    echo "Media de cada alumno: <br>";
    foreach ($notasAlumnos as $alumno => $notas) {
        $mediaAlumno = array_sum($notas) / count($notas); //sumar notas de cada alumno y dividir entre el numero de notas
        echo "$alumno: " . $mediaAlumno . "<br>";
        $mediaClase = $mediaClase + $mediaAlumno; //sumar la media de cada alunno a la media total de clase (dentro del foreach)
    }
    
    $mediaClase = $mediaClase / $totalAlumnos;
    echo "<br><br> La media de la clase: <br>" . $mediaClase . "\n";
}


calcularMedias($notasAlumnos);

?>