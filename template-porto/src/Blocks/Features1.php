<?php

namespace Ijpatricio\SkimTemplatePorto\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Ijpatricio\Skim\Contracts\HasBlock;

class Features1 implements HasBlock
{
    public static function getBlock(): Block
    {
        return Block::make('features1')
           ->label('Features 1')
            ->preview('skim::filament.forms.block-preview')
            ->viewData([
                'block_name' => 'Features 1',
            ])
            ->schema([
                Repeater::make('features')
                    ->label('Features')
                    ->schema([
                        TextInput::make('icon')
                            ->label('Icon'),
                        TextInput::make('title')
                            ->label('Title'),
                        TextInput::make('description')
                            ->label('Description'),
                    ])
                    ->columns(3),
            ]);
    }
}
