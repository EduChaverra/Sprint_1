<?php
class Persona {

    private $nombre;
    private $apellido;

    // Constructor
    public function __construct($nombre, $apellido) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function __toString() {
        return "Nombre completo: " . $this->nombre . " " . $this->apellido;
    }
}

$persona = new Persona("Cristian", "Chaverra");

echo $persona;
?>