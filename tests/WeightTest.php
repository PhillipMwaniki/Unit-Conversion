<?php

namespace Phillipmwaniki\UnitConversion\Tests;

use Phillipmwaniki\UnitConversion\Weight;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_convert_kg_to_lbs()
    {
        $lbs = Weight::fromKilogrammes(100)->toLbs();
        $this->assertEquals(220.4623, $lbs);
    }
}
