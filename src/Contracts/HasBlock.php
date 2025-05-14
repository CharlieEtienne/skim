<?php

namespace Ijpatricio\Skim\Contracts;

use Filament\Forms\Components\Builder\Block;

interface HasBlock
{
    public static function getBlock(): Block;
}
