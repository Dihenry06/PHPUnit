<?php

namespace CodeExperts\Aritmetico;

use PHPUnit\Framework\TestCase;

class SubTest extends TestCase
{
    public function testSubDoisNumeros()
    {
        $sub = new Sub();
        $sub->setNum1(10);
        $sub->setNum2(5);

        $this->assertEquals(5,$sub->sub());
    }
}
