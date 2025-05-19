<?php

namespace Ijpatricio\SkimTemplatePorto\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Ijpatricio\Skim\Contracts\HasBlock;

class Footer1 implements HasBlock
{
    public static function getBlock(): Block
    {
        return Block::make('footer1')
            ->label('Footer 1')
            ->preview('skim::filament.forms.block-preview')
            ->viewData([
                'block_name' => 'Footer 1',
            ])
            ->schema([
                //
            ]);
    }
}
