<?php

namespace Ijpatricio\SkimTemplatePorto\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Ijpatricio\Skim\Contracts\HasBlock;

class Showcase1 implements HasBlock
{
    public static function getBlock(): Block
    {
        return Block::make('showcase1')
            ->label('Showcase 1')
            ->preview('skim::filament.forms.block-preview')
            ->viewData([
                'block_name' => 'Showcase 1',
            ])
            ->schema([
                TextInput::make('title')
                    ->label('Title'),
                TextInput::make('subtitle')
                    ->label('Subtitle'),

                Repeater::make('showcases')
                    ->collapsible()
                    ->itemLabel(fn (array $state) => $state['title'] ?? 'Showcase')
                    ->schema([
                        TextInput::make('number'),
                        TextInput::make('title')->live(onBlur: true),
                        TextInput::make('description'),
                    ]),
            ]);
    }
}
