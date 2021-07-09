<?php

namespace Phillipmwaniki\UnitConversion;

class Temperature
{
    protected float $celsius;

    public static function fromCelsius(float $celsius): self
    {
        return new static($celsius);
    }

    public function __construct(float $celsius)
    {
        $this->celsius = $celsius;
    }

    public function toFarenheight(): float
    {
        return ($this->celsius * 1.8000) + 32;
    }
}
