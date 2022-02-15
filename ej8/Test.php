<?php

require 'ejercicio.php';

class Test extends PHPUnit\Framework\TestCase
{
    public function testPiramide() {
        $piramide =
      <<<PIRAMIDE5
          *
         * *
        * * *
       * * * *
      * * * * *
      PIRAMIDE5;

        $this->assertEquals(
            $piramide,
            generarPiramide(5)
        );
    }
}
