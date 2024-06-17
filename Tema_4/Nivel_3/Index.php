<?php
require ("Cinema.php");
require ("Pelicula.php");


$cinema1 = new Cinema ("Aribau", "Barcelona");
$cinema1->addPelicula("El caso Goldman",116,"Cedric Kahn");
$cinema1->addPelicula("Las ocho montañas",142,"Felix van Groeningen");
$cinema1->addPelicula("Vidas Pasadas",106,"Celine Song");

$cinema2 = new Cinema ("Bages", "Manresa");
$cinema1->addPelicula("Anatomía de una caída",145,"Justine Triet");
$cinema1->addPelicula("El leopardo de las nieves",92,"Marie Amiguet");
$cinema1->addPelicula("Upon Entry",77,"Alejandro Rojas");

$cinema3 = new Cinema ("Ocine Magic", "Badalona");
$cinema1->addPelicula("El regreso de las golondrinas",134,"Li Ruijun");
$cinema1->addPelicula("Josep",74,"Aurel");
$cinema1->addPelicula("El Agente Topo",90,"Maite Alberdi");

$cinemas = [$cinema1, $cinema2, $cinema3];



?>