<?php

namespace Molkky;

use PHPUnit\Framework\TestCase;

class MolkkyTest extends TestCase
{
    public function testMolkky()
    {
        $molkky = new Molkky();
        $this->assertEquals(8, $molkky->getScore([
            [5,4],
            [4],
            [6,3],
        ]));
    }
}
