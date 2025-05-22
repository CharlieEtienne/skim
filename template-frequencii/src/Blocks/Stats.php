<?php

namespace Ijpatricio\SkimTemplateFrequencii\Blocks;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Ijpatricio\Skim\Contracts\HasBlock;

class Stats implements HasBlock
{
    public static function getBlock(): Block
    {
        return Block::make('stats')
            ->label('Stats')
            ->preview('skim::filament.forms.block-preview')
            ->viewData([
                'block_name' => 'Stats',
            ])
            ->schema([
                TextInput::make('title'),

                Repeater::make('stats')
                    ->collapsible()
                    ->cloneable()
                    ->label('Stats')
                    ->schema([
                        TextInput::make('prefix')
                            ->label('Prefix'),
                        TextInput::make('number')
                            ->label('Number'),
                        TextInput::make('suffix')
                            ->label('Suffix'),
                        Textarea::make('description')
                            ->columnSpanFull()
                            ->label('Description'),
                    ])
                    ->columns(3),
            ]);
    }
}
