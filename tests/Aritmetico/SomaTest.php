<?php

namespace CodeExperts\Aritmetico;

use PHPUnit\Framework\TestCase;

class SomaTest extends TestCase
{
    public function testSomaDoisNumeros()
    {
        $soma = new Soma();
        $soma->setNum1(20);
        $soma->setNum2(20);

        $this->assertEquals(40,$soma->somar());
    }
}
