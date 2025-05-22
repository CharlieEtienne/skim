<?php

namespace Ijpatricio\SkimTemplateFrequencii\Blocks;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Ijpatricio\Skim\Contracts\HasBlock;
use Ijpatricio\SkimPorto\Forms\IconSelectorOptions;

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
                TextInput::make('title'),
                Textarea::make('subtitle'),

                Repeater::make('features')
                    ->collapsible()
                    ->cloneable()
                    ->itemLabel(fn (array $state) => $state['title'] ?? 'Feature')
                    ->label('Features')
                    ->schema([
                        Select::make('icon')
                            ->searchable()
                            ->options(IconSelectorOptions::get()),
                        TextInput::make('title')
                            ->live(onBlur: true)
                            ->label('Title'),
                        Textarea::make('description')
                            ->columnSpanFull()
                            ->label('Description'),
                    ])
                    ->columns(2),
            ]);
    }
}
