<?php

class Cinema {
    private $nombre;
    private $poblacion;
    private $peliculas = array();

    public function __construct($nombre, $poblacion){
        $this->nombre = $nombre;
        $this->poblacion = $poblacion;
    }

    public function addPelicula($pelicula){
        $this->peliculas[] = $pelicula;
    }

    public function getPeliculas() {
        return $this->peliculas;
    }

    public function mostrarPeliculaConMayorDuracion(){
        $duracion = null;

        foreach($this->peliculas as $pelicula){
            if ($duracion == null || $pelicula->duracion > $duracion->duracion) {
                $duracion = $pelicula;
            }
        }
        return $pelicula;   
    }

    public static function buscarPeliculasPorDirector($cinemas, $nombreDirector) {
        $resultado = [];
        $nombresPeliculas = [];
        foreach ($cinemas as $cinema) {
            foreach ($cinema->getPeliculas() as $pelicula) {
                if ($pelicula->director == $nombreDirector && !in_array($pelicula->nombre, $nombresPeliculas)) {
                    $resultado[] = $pelicula;
                    $nombresPeliculas[] = $pelicula->nombre;
                }
            }
        }
        return $resultado;
    }
}

?>