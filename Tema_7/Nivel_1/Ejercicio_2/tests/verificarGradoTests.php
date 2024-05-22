<?php

use PHPUnit\Framework\TestCase;

Class VerificarGradoTests extends TestCase {

    public function testPasaPrimeraDivision(){
        $this->assertEquals(verificarGrado(60));
        $this->assertEquals(verificarGrado(100));
    }

    public function testPasaSeguraDivision(){
        $this->assertEquals(verificarGrado(45));
        $this->assertEquals(verificarGrado(59));
        $this->assertEquals(verificarGrado(53));
    }

    public function testPasaTerceraDivision(){
        $this->assertEquals(verificarGrado(33));
        $this->assertEquals(verificarGrado(44));
        $this->assertEquals(verificarGrado(39));
    }

    public function testReprovar(){
        $this->assertEquals(verificarGrado(0));
        $this->assertEquals(verificarGrado(32));
    }

}

?>

./vendor/bin/phpunit --bootstrap src/verificarGrado.php tests/verificarGradoTests.php
