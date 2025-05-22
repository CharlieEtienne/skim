<?php

namespace Ijpatricio\SkimTemplateFrequencii\Blocks;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Ijpatricio\Skim\Contracts\HasBlock;

class Steps implements HasBlock
{
    public static function getBlock(): Block
    {
        return Block::make('steps')
            ->label('Steps')
            ->preview('skim::filament.forms.block-preview')
            ->viewData([
                'block_name' => 'Steps',
            ])
            ->schema([
                TextInput::make('badge')->helperText('Default: "How it works"'),
                TextInput::make('title'),
                Textarea::make('subtitle'),

                Repeater::make('steps')
                    ->label('Steps')
                    ->defaultItems(3)
                    ->simple(
                        TextInput::make('text'),
                    ),
            ]);
    }
}
