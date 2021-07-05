<?php

namespace Phillipmwaniki\UnitConversion\Tests;

use Phillipmwaniki\UnitConversion\UnitConversion;

class UnitConversionTest extends TestCase
{
    /** @test */
    public function it_can_convert_kg_to_lbs()
    {
        $lbs = UnitConversion::fromKilogrammes(100)->toLbs();
        $this->assertEquals(220.4623, $lbs);
    }
}
