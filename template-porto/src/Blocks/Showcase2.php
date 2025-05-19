<?php

namespace Ijpatricio\SkimTemplatePorto\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Ijpatricio\Skim\Contracts\HasBlock;

class Showcase2 implements HasBlock
{
    public static function getBlock(): Block
    {
        return Block::make('showcase2')
            ->label('Showcase 2')
            ->preview('skim::filament.forms.block-preview')
            ->viewData([
                'block_name' => 'Showcase 2',
            ])
            ->schema([
                //
            ]);
    }
}
