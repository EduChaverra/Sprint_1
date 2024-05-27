<?php

use PHPUnit\Framework\TestCase;

Class VerificarGradoTests extends TestCase {

    /**
     * @dataProvider addProvider
     */
    public function testVerificarGradoDataProvider($expectedDivision, $nota){
        $this->assertEquals($expectedDivision, verificarGrado($nota));

    }

    public function addProvider(){
        return [
            ["El estudiante pasa a primera division", 60],
            ["El estudiante pasa a primera division", 100],
            ["El estudiante pasa a segunda division", 45],
            ["El estudiante pasa a segunda division", 59],
            ["El estudiante pasa a segunda division", 49],
            ["El estudiante pasa a tercera division", 33],
            ["El estudiante pasa a tercera division", 44],
            ["El estudiante pasa a tercera division", 39],
            ["El estudiante ha reprovado", 0],
            ["El estudiante ha reprovado", 32],
        ];
    }

}

?>

./vendor/bin/phpunit --bootstrap src/verificarGrado.php tests/verificarGradoTests.php
