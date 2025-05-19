<?php

namespace Ijpatricio\SkimTemplatePorto\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Ijpatricio\Skim\Contracts\HasBlock;

class Logocloud1 implements HasBlock
{
    public static function getBlock(): Block
    {
        return Block::make('logocloud1')
            ->label('Logo Cloud 1')
            ->preview('skim::filament.forms.block-preview')
            ->viewData([
                'block_name' => 'Logo Cloud 1',
            ])
            ->schema([
                //
            ]);
    }
}
