<?php

use PHPUnit\Framework\TestCase;

Class VerificarGradoTests extends TestCase {

    public function testPasaPrimeraDivision(){
        $this->assertEquals("El estudiante pasa a primera division", verificarGrado(60));
        $this->assertEquals("El estudiante pasa a primera division", verificarGrado(100));
    }

    public function testPasaSeguraDivision(){
        $this->assertEquals("El estudiante pasa a segunda division", verificarGrado(45));
        $this->assertEquals("El estudiante pasa a segunda division", verificarGrado(59));
        $this->assertEquals("El estudiante pasa a segunda division", verificarGrado(0));
    }

    public function testPasaTerceraDivision(){
        $this->assertEquals("El estudiante pasa a tercera division", verificarGrado(33));
        $this->assertEquals("El estudiante pasa a tercera division", verificarGrado(44));
        $this->assertEquals("El estudiante pasa a tercera division", verificarGrado(39));
    }

    public function testReprovar(){
        $this->assertEquals("El estudiante ha reprovado", verificarGrado(0));
        $this->assertEquals("El estudiante ha reprovado", verificarGrado(32));
    }

}

?>

./vendor/bin/phpunit --bootstrap src/verificarGrado.php tests/verificarGradoTests.php
