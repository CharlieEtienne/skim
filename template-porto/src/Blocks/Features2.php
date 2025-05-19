<?php

namespace Ijpatricio\SkimTemplatePorto\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Ijpatricio\Skim\Contracts\HasBlock;

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
                TextInput::make('section_title')
                    ->label('Section Title')
                    ->default('Education'),
                TextInput::make('section_subtitle')
                    ->label('Section Subtitle')
                    ->default('Below is a summary of the places I studied'),

                TextInput::make('feature1_year')
                    ->label('Feature 1 Year')
                    ->default('2015 – 2016'),
                TextInput::make('feature1_description')
                    ->label('Feature 1 Description')
                    ->default('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
                TextInput::make('feature1_link_text')
                    ->label('Feature 1 Link Text')
                    ->default('See the place here'),

                TextInput::make('feature2_year')
                    ->label('Feature 2 Year')
                    ->default('2015 – 2016'),
                TextInput::make('feature2_description')
                    ->label('Feature 2 Description')
                    ->default('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
                TextInput::make('feature2_link_text')
                    ->label('Feature 2 Link Text')
                    ->default('See the place here'),

                TextInput::make('feature3_year')
                    ->label('Feature 3 Year')
                    ->default('2015 – 2016'),
                TextInput::make('feature3_description')
                    ->label('Feature 3 Description')
                    ->default('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
                TextInput::make('feature3_link_text')
                    ->label('Feature 3 Link Text')
                    ->default('See the place here'),

                TextInput::make('feature4_year')
                    ->label('Feature 4 Year')
                    ->default('2015 – 2016'),
                TextInput::make('feature4_description')
                    ->label('Feature 4 Description')
                    ->default('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
                TextInput::make('feature4_link_text')
                    ->label('Feature 4 Link Text')
                    ->default('See the place here'),

                TextInput::make('feature5_year')
                    ->label('Feature 5 Year')
                    ->default('2015 – 2016'),
                TextInput::make('feature5_description')
                    ->label('Feature 5 Description')
                    ->default('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
                TextInput::make('feature5_link_text')
                    ->label('Feature 5 Link Text')
                    ->default('See the place here'),

                TextInput::make('feature6_year')
                    ->label('Feature 6 Year')
                    ->default('2015 – 2016'),
                TextInput::make('feature6_description')
                    ->label('Feature 6 Description')
                    ->default('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
                TextInput::make('feature6_link_text')
                    ->label('Feature 6 Link Text')
                    ->default('See the place here'),
            ]);
    }
}
