<?php

namespace Ijpatricio\SkimTemplatePorto\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Ijpatricio\Skim\Contracts\HasBlock;

class Logocloud1 implements HasBlock
{
    public static function getBlock(): Block
    {
        return Block::make('logocloud1')
            ->label('Logo Cloud 1')
            ->preview('skim::filament.forms.block-preview')
            ->viewData([
                'block_name' => 'Logo Cloud 1',
            ])
            ->schema([
                TextInput::make('section_title')
                    ->label('Section Title')
                    ->default('Experience'),
                TextInput::make('section_subtitle')
                    ->label('Section Subtitle')
                    ->default('Below is a summary of the places I studied'),

                TextInput::make('column1_header')
                    ->label('Column 1 Header')
                    ->default('Company'),
                TextInput::make('column2_header')
                    ->label('Column 2 Header')
                    ->default('Position'),
                TextInput::make('column3_header')
                    ->label('Column 3 Header')
                    ->default('Year'),

                TextInput::make('row1_company')
                    ->label('Row 1 Company')
                    ->default('Massa Fames'),
                TextInput::make('row1_location')
                    ->label('Row 1 Location')
                    ->default('New York'),
                TextInput::make('row1_position')
                    ->label('Row 1 Position')
                    ->default('Junior Front-End Developer'),
                TextInput::make('row1_year')
                    ->label('Row 1 Year')
                    ->default('2016'),

                TextInput::make('row2_company')
                    ->label('Row 2 Company')
                    ->default('Massa Fames'),
                TextInput::make('row2_location')
                    ->label('Row 2 Location')
                    ->default('New York'),
                TextInput::make('row2_position')
                    ->label('Row 2 Position')
                    ->default('Junior Front-End Developer'),
                TextInput::make('row2_year')
                    ->label('Row 2 Year')
                    ->default('2016'),

                TextInput::make('row3_company')
                    ->label('Row 3 Company')
                    ->default('Massa Fames'),
                TextInput::make('row3_location')
                    ->label('Row 3 Location')
                    ->default('New York'),
                TextInput::make('row3_position')
                    ->label('Row 3 Position')
                    ->default('Junior Front-End Developer'),
                TextInput::make('row3_year')
                    ->label('Row 3 Year')
                    ->default('2016'),

                TextInput::make('row4_company')
                    ->label('Row 4 Company')
                    ->default('Massa Fames'),
                TextInput::make('row4_location')
                    ->label('Row 4 Location')
                    ->default('New York'),
                TextInput::make('row4_position')
                    ->label('Row 4 Position')
                    ->default('Junior Front-End Developer'),
                TextInput::make('row4_year')
                    ->label('Row 4 Year')
                    ->default('2016'),

                TextInput::make('row5_company')
                    ->label('Row 5 Company')
                    ->default('Massa Fames'),
                TextInput::make('row5_location')
                    ->label('Row 5 Location')
                    ->default('New York'),
                TextInput::make('row5_position')
                    ->label('Row 5 Position')
                    ->default('Junior Front-End Developer'),
                TextInput::make('row5_year')
                    ->label('Row 5 Year')
                    ->default('2016'),
            ]);
    }
}
