<?php

namespace Ijpatricio\SkimTemplatePorto\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Ijpatricio\Skim\Contracts\HasBlock;

class Features1 implements HasBlock
{
    public static function getBlock(): Block
    {
        return Block::make('features1')
           ->label('Features 1')
            ->preview('skim-template-porto::blocks.features1')
            ->schema([
                TextInput::make('title'),
                TextInput::make('description'),
            ]);
    }
}
