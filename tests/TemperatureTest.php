<?php

namespace Phillipmwaniki\UnitConversion\Tests;

use Phillipmwaniki\UnitConversion\Temperature;
use Phillipmwaniki\UnitConversion\Weight;

class TemperatureTest extends TestCase
{
    /** @test */
    public function it_can_convert_celsius_to_farenheight()
    {
        $temperature = Temperature::fromCelsius(100)->toFarenheight();
        $this->assertEquals(212, $temperature);
    }
}
