<?php

abstract class animal{
    protected $nombre;

    public function __construct($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public abstract function makeSound();
}

class perro extends animal{
    public function makeSound(){
        echo "Guau. <br>";
    }    
}

class gato extends animal{
    public function makeSound(){
        echo "Miau. <br>";
    }
}

$gato1 = new gato("Bola de nieve");
echo "El gato ". $gato1->getNombre() . ", hace: ";
echo $gato1->makeSound() . "<br>";

$perro1 = new perro("Nut");
echo "El perro ". $perro1->getNombre() . ", hace: ";
echo $perro1->makeSound();

?>