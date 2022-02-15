<?php

require 'ejercicio.php';

class Test extends PHPUnit\Framework\TestCase
{
    public function testMilenializar() {
        $texto = <<<GONGORA
Buenas tardes, me da igual cómo se escribe, esto
es un texto que está escrito correctamente, porque... ¡aquí
se respeta la ortografía!
GONGORA;

        $textoEsperado = <<<GONGORA
Wenas tardes, me da = como se escribe, esto
es un texto k esta escrito correctamente, xq... aqui
se respeta la ortografia!
GONGORA;

        $this->assertEquals(strtolower($textoEsperado), strtolower(milenializar($texto)));
    }
}
