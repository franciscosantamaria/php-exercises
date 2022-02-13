<?php

require 'ejercicio.php';

class Test extends PHPUnit\Framework\TestCase
{
    public function testBasicTests() {
        $this->assertTrue(xo('ooxx'));
        $this->assertFalse(xo('xooxx'));
        $this->assertTrue(xo('ooxXm'));
        $this->assertTrue(xo('zpzpzpp'));
        $this->assertFalse(xo('zzoo'));
    }
}
