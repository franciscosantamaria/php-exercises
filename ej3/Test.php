<?php

require 'ejercicio.php';

class Test extends PHPUnit\Framework\TestCase
{
    public function testBasicTests() {
        $this->assertEquals('PEPE.EXE', extension('pepe.exe'));
        $this->assertEquals('ana.db', extension('Ana.db'));
        $this->assertEquals('DaTos.adb', extension('DaTos.adb'));
    }
}
