<?php

require 'ejercicio.php';

class Test extends PHPUnit\Framework\TestCase
{
    public function testBasicTests() {
        $this->assertEquals(false, capicua('123'));
        $this->assertEquals(false, capicua('4422'));
        $this->assertEquals(true, capicua('2'));
        $this->assertEquals(true, capicua('44'));
        $this->assertEquals(true, capicua('12321'));
        $this->assertEquals(true, capicua('rajar'));
    }
}
