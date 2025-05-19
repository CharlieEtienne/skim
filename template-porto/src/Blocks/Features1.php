<?php

namespace Ijpatricio\SkimTemplatePorto\Blocks;

use Filament\Forms\Components\Builder\Block;
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
                TextInput::make('feature1_icon')
                    ->label('Feature 1 Icon')
                    ->default('activity'),
                TextInput::make('feature1_title')
                    ->label('Feature 1 Title')
                    ->default('High experience'),
                TextInput::make('feature1_description')
                    ->label('Feature 1 Description')
                    ->default('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),

                TextInput::make('feature2_icon')
                    ->label('Feature 2 Icon')
                    ->default('codesandbox'),
                TextInput::make('feature2_title')
                    ->label('Feature 2 Title')
                    ->default('Useful sandboxes'),
                TextInput::make('feature2_description')
                    ->label('Feature 2 Description')
                    ->default('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),

                TextInput::make('feature3_icon')
                    ->label('Feature 3 Icon')
                    ->default('coffee'),
                TextInput::make('feature3_title')
                    ->label('Feature 3 Title')
                    ->default('Success side projects'),
                TextInput::make('feature3_description')
                    ->label('Feature 3 Description')
                    ->default('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
            ]);
    }
}
