<?php

namespace Ijpatricio\SkimTemplatePorto\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Ijpatricio\Skim\Contracts\HasBlock;
use Ijpatricio\SkimPorto\Forms\IconSelectorOptions;

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
                TextInput::make('title'),
                TextInput::make('subtitle'),

                Repeater::make('socials')
                    ->schema([
                        Select::make('icon')
                            ->searchable()
                            ->options(IconSelectorOptions::get()),
                        TextInput::make('url')
                            ->url()
                            ->label('URL'),
                    ]),
            ]);
    }
}
