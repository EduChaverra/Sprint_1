<?php

class Pelicula{
    private string $nombre;
    private double $duracion;
    private string $director;

    public function __construct($nombre, $duracion, $director) {
        $this->nombre = $nombre;
        $this->duracion = $duracion;
        $this->director = $director;
         
    }
}

?>