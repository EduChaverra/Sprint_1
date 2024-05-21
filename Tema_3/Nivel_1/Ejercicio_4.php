<?php

$datos = array("Nombre"=>"Cristian","Edad"=>32,"Email"=>"eddchaverra@gmail.com","Comida favorita"=>"Ajiaco santafereño");

/*echo $datos["Nombre"]. "<br>";
echo $datos["Edad"]. "<br>";
echo $datos["Email"]. "<br>";
echo $datos["Comida favorita"];*/

foreach ($datos as $item => $dato){
    echo $item . ": " . $dato . " <br>";
}
    

?>