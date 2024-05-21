<?php

Class Employee {

    private $nombre;
    private $salario;

    public function initialize($nombre,$salario){
        $this->nombre = $nombre;
        $this->salario = $salario;
    }
    public function print(){

        $limite = 6000;
        $respuesta = "";

        if ($this->salario > $limite){
            $respuesta =  "Tiene que pagar impuestos";
        } else {
            $respuesta =  "No tiene que pagar impuestos";
        }

        echo $this->nombre . "<br>";
        echo $respuesta . "<br>";

    }

}

$empleado1=new Employee();
$empleado1->initialize("Cristian",6500);
$empleado1->print();
$empleado2=new Employee();
$empleado2->initialize("Carla",4500);
$empleado2->print();

?>