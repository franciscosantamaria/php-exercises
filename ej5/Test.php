<?php

require 'ejercicio.php';

class Test extends PHPUnit\Framework\TestCase
{
    public function testColoresComas() {
        $this->assertEquals('blanco,verde,rojo', coloresComas(['blanco', 'verde', 'rojo']));
    }

    public function testColoresListaOrdenada() {
        $this->assertXmlStringEqualsXmlString(
            '<ul><li>blanco</li><li>rojo</li><li>verde</li></ul>',
            coloresListaOrdenada(['blanco', 'verde', 'rojo'])
        );
    }
}
