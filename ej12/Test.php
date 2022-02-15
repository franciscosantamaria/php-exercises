<?php

require 'ejercicio.php';

class Test extends PHPUnit\Framework\TestCase
{
    public function testBasicTests() {
        $this->assertEquals("aehrsty", longest("aretheyhere", "yestheyarehere"));
        $this->assertEquals("abcdefghilnoprstu", longest("loopingisfunbutdangerous", "lessdangerousthancoding"));
        $this->assertEquals("acefghilmnoprstuy", longest("inmanylanguages", "theresapairoffunctions"));
        $this->assertEquals("adefghklmnorstu", longest("lordsofthefallen", "gamekult"));
    }
}
