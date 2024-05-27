<?php

use PHPUnit\Framework\TestCase;

Class FormularioTests extends TestCase{

    function testLeerNombreYDevelover(){
        //Given
        $nombreEsperado = 'pepiwwto';
        $_POST['nombre'] = 'pepito';
        
        //When
        $resultado = procesarFormulario();

        //Then
        $this->assertEquals($nombreEsperado, $resultado['nombre']);



    } 

}

?>