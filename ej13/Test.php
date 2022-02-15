<?php

require 'ejercicio.php';

class Test extends PHPUnit\Framework\TestCase
{
    public function testBasicTests() {
        $this->assertTrue(isograma('Dermatoglyphics'));
        $this->assertFalse(isograma('aba'));
        $this->assertFalse(isograma('moOse'));
    }
}
