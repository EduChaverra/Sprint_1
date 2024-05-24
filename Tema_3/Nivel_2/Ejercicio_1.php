<?php

$array1 = array (1, 2.3, 3, 4, 5.9, 6);
$array2 = array (1.4, 2.3, 3, 4, 5.9);


//interseccion
$interseccion = array_intersect($array1, $array2);
echo "La interseccion de los dos arrays: <br>";
print_r($interseccion);

//mezcla
$mezcla = array_merge($array1, $array2);
echo "<br><br> La mezcla de los dos arrays: <br>";
print_r($mezcla);
?>