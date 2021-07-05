<?php

namespace Phillipmwaniki\UnitConversion;

class UnitConversion
{
    protected float $kilogrammes;

    public static function fromKilogrammes(float $kilogrammes)
    {
        return new static($kilogrammes);
    }

    public function __construct(float $kilogrammes)
    {
        $this->kilogrammes = $kilogrammes;
    }

    public function toLbs(): float
    {
        return $this->kilogrammes * 2.204623;
    }
}
