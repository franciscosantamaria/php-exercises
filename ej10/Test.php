<?php

require 'ejercicio.php';

class Test extends PHPUnit\Framework\TestCase
{
    public function testBasicTests() {
        $this->assertEquals(["ab", "cd", "ef"], solution("abcdef"));
        $this->assertEquals(["ab", "cd", "ef", "g_"], solution("abcdefg"));
        $this->assertEquals([], solution(""));
    }
}
