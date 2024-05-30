<?php
 require ("PokerDice.php");

$dado1 = new PokerDice();
$dado2 = new PokerDice();
$dado3 = new PokerDice();
$dado4 = new PokerDice();
$dado5 = new PokerDice();

$dado1->tirarDado();
$dado2->tirarDado();
$dado3->tirarDado();
$dado4->tirarDado();
$dado5->tirarDado();

echo "Resultados: <br><br>";
echo "Dado 1: " . $dado1->verFiguraDado() . "<br>";
echo "Dado 2: " . $dado2->verFiguraDado() . "<br>";
echo "Dado 3: " . $dado3->verFiguraDado() . "<br>";
echo "Dado 4: " . $dado4->verFiguraDado() . "<br>";
echo "Dado 5: " . $dado5->verFiguraDado() . "<br>";

echo "<br>Total de tiros: " . PokerDice::getTotalTiros() . "<br>";
?>