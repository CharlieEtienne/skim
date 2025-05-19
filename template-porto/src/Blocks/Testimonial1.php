<?php

namespace Ijpatricio\SkimTemplatePorto\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Ijpatricio\Skim\Contracts\HasBlock;

class Testimonial1 implements HasBlock
{
    public static function getBlock(): Block
    {
        return Block::make('testimonial1')
            ->label('Testimonial 1')
            ->preview('skim::filament.forms.block-preview')
            ->viewData([
                'block_name' => 'Testimonial 1',
            ])
            ->schema([
                //
            ]);
    }
}
