<?php

$X = array (10, 20, 30, 40, 50,60);

/*echo count($X);
unset($X[6]);
echo count($X);*/

//medida array
echo sizeof($X) . "<br>";
//eiminar valor esacto del array
$X = array_diff($X, array(60));
echo sizeof($X);

?>