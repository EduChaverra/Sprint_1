<?php

session_start();

function procesarFormulario(){
    $nombre = $_POST['nombre'];
    return $nombre;
}

if (isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
} else {
    $nombre = "";
}

if (isset($_POST['edad'])){
    $edad = $_POST['edad'];
} else {
    $edad = "";
}

if (isset($_POST['email'])){
    $email = $_POST['email'];
} else {
    $email = "";
}

if (isset($_POST['contraseña'])){
    $contraseña = $_POST['contraseña'];
} else {
    $contraseña = "";
}


$_SESSION['nombre'] = $nombre;
$_SESSION['contraseña'] = $contraseña;

echo "<h3>Datos recibidos </h3><br>";
echo "Nombre: " . $nombre . "<br>";
echo "Edad: " . $edad . "<br>";
echo "Email: " . $email . "<br>";
echo "Contraseña: " . $contraseña . "<br><br>";


echo "<h3>Datos guardados en la sesion </h3><br>";
echo "Nombre: " . $_SESSION['nombre'] . "<br>";
echo "Contraseña: " . $_SESSION['contraseña'];

?>