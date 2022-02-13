<?php

require 'ejercicio.php';

class Test extends PHPUnit\Framework\TestCase
{
    public function testBasicTests() {
        $this->assertEquals(2, numElevaciones(150));
        $this->assertEquals(6, numElevaciones(5));
        $this->assertEquals(1, numElevaciones(12000));
    }
}
