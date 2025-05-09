<?php

namespace Ijpatricio\Skim\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ijpatricio\Skim\Skim
 */
class Skim extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Ijpatricio\Skim\Skim::class;
    }
}
