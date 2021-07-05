<?php

namespace Phillipmwaniki\UnitConversion;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Phillipmwaniki\UnitConversion\UnitConversion
 */
class UnitConversionFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'unit-conversion';
    }
}
