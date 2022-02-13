<?php

require 'ejercicio.php';

class Test extends PHPUnit\Framework\TestCase
{
    public function testBasicTests() {
        $this->assertEquals(true, esPar(10));
        $this->assertEquals(false, esPar(55));
        $this->assertEquals(true, esPar(0));
    }
}
