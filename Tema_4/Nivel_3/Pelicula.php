<?php

class Pelicula {
    private $nombre;
    private $duracion;
    private $director;

    public function __construct($nombre,$duracion,$director){
        $this->nombre = $nombre;
        $this->duracion = $duracion;
        $this->director = $director;
    }
}
?>
