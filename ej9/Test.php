<?php

require 'ejercicio.php';

class Test extends PHPUnit\Framework\TestCase
{
    public function testArraySum() {
        $this->assertEquals(15, arraySum([2, 5, 8]));
        $this->assertEquals(-1, arraySum([2, 5, -4, -4]));
        $this->assertEquals(0, arraySum([]));
    }
}
