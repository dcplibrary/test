<?php

namespace Dcplibrary\Test\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dcplibrary\Test\Test
 */
class Test extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'test';
    }
}
