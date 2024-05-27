<?php

class PokerDice {
    private $carasDado = array("As", "K", "Q", "J", "7", "8");
    private $ultimoTiro;
    private static $totalTiros = 0;

    public function tirarDado() {
        $this->ultimoTiro = rand(0, 5);
        self::$totalTiros++;
    }

    public function verFiguraDado() {
        return $this->carasDado[$this->ultimoTiro];
    }

    public static function getTotalTiros() {
        return self::$totalTiros;
    }
}

?>