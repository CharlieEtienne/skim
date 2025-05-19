<?php

namespace Ijpatricio\SkimTemplatePorto\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Ijpatricio\Skim\Contracts\HasBlock;

class Testimonial2 implements HasBlock
{
    public static function getBlock(): Block
    {
        return Block::make('testimonial2')
            ->label('Testimonial 2')
            ->preview('skim::filament.forms.block-preview')
            ->viewData([
                'block_name' => 'Testimonial 2',
            ])
            ->schema([
                //
            ]);
    }
}
