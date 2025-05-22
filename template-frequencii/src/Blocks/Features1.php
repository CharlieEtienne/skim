<?php

namespace Ijpatricio\SkimTemplateFrequencii\Blocks;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Ijpatricio\Skim\Contracts\HasBlock;
use Ijpatricio\SkimPorto\Forms\IconSelectorOptions;

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
                TextInput::make('badge')->helperText('Default: "Feature"'),
                TextInput::make('title'),
                TextInput::make('subtitle'),
                TextInput::make('button_text'),
                TextInput::make('button_link'),

                Repeater::make('features')
                    ->collapsible()
                    ->itemLabel(fn (array $state) => $state['title'] ?? 'Feature')
                    ->label('Features')
                    ->schema([
                        Select::make('icon')
                            ->searchable()
                            ->options(IconSelectorOptions::get()),
                        TextInput::make('title')
                            ->live(onBlur: true)
                            ->label('Title'),
                        TextInput::make('description')
                            ->label('Description'),
                        FileUpload::make('image')
                            ->image()
                            ->label('Image'),
                    ])
                    ->columns(3),
            ]);
    }
}
