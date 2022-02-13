<?php

require 'ejercicio.php';

class Test extends PHPUnit\Framework\TestCase
{
    public function testPalabraCortaYLarga() {
        $this->assertEquals(
            [
                'corta' => 'te',
                'larga' => 'pimienta'
            ],
            palabraCortayLarga(["patata","cebolla","sal","pimienta","te","agua"])
        );
    }
}
