<?php

namespace Ijpatricio\SkimTemplatePorto\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Ijpatricio\Skim\Contracts\HasBlock;

class Features2 implements HasBlock
{
    public static function getBlock(): Block
    {
        return Block::make('features2')
            ->label('Features 2')
            ->preview('skim::filament.forms.block-preview')
            ->viewData([
                'block_name' => 'Features 2',
            ])
            ->schema([
                //
            ]);
    }
}
