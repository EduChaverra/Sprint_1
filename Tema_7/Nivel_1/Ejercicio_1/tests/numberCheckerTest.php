<?php

use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase {

    public function testIsEvenConNumeroPar() {
        $numeroPar = new NumberChecker(4);
        $this->assertTrue($numeroPar->isEven());
    }

    public function testIsEvenConNumeroImpar() {
        $numeroImpar = new NumberChecker(3);
        $this->assertFalse($numeroImpar->isEven());
    }

    public function testIsEvenConCero() {
        $numeroCero = new NumberChecker(0);
        $this->assertTrue($numeroCero->isEven());
    }

    public function testIsEvenConNull() {
        $null = new NumberChecker(null);
        $this->assertFalse($null->isEven());
    }

    public function testIsPositiveConNumeroPositivo() {
        $numeroPositivo = new NumberChecker(5);
        $this->assertTrue($numeroPositivo->isPositive());
    }

    public function testIsPositiveConNumeroNegativo() {
        $numeroNegativo = new NumberChecker(-5);
        $this->assertFalse($numeroNegativo->isPositive());
    }

    public function testIsPositiveConCero() {
        $numeroCero = new NumberChecker(0);
        $this->assertFalse($numeroCero->isPositive());
    }

    public function testIsPositiveConNull() {
        $null = new NumberChecker(null);
        $this->assertFalse($null->isPositive());
    }
    
}
?>