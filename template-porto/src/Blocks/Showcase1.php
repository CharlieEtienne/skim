<?php

namespace Ijpatricio\SkimTemplatePorto\Blocks;

use Filament\Forms\Components\Builder\Block;
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
                TextInput::make('section_title')
                    ->label('Section Title')
                    ->default('Portfolio'),
                TextInput::make('section_subtitle')
                    ->label('Section Subtitle')
                    ->default('I have brought here my biggest and favorite works as a professional.'),

                TextInput::make('showcase1_number')
                    ->label('Showcase 1 Number')
                    ->default('01'),
                TextInput::make('showcase1_title')
                    ->label('Showcase 1 Title')
                    ->default('Demo API Generator'),
                TextInput::make('showcase1_description')
                    ->label('Showcase 1 Description')
                    ->default('A dummy data free and documented API generator to facilitate the process of testing the front-end portion of projects.'),

                TextInput::make('showcase2_number')
                    ->label('Showcase 2 Number')
                    ->default('02'),
                TextInput::make('showcase2_title')
                    ->label('Showcase 2 Title')
                    ->default('Demo API Generator'),
                TextInput::make('showcase2_description')
                    ->label('Showcase 2 Description')
                    ->default('A dummy data free and documented API generator to facilitate the process of testing the front-end portion of projects.'),

                TextInput::make('showcase3_number')
                    ->label('Showcase 3 Number')
                    ->default('03'),
                TextInput::make('showcase3_title')
                    ->label('Showcase 3 Title')
                    ->default('Demo API Generator'),
                TextInput::make('showcase3_description')
                    ->label('Showcase 3 Description')
                    ->default('A dummy data free and documented API generator to facilitate the process of testing the front-end portion of projects.'),
            ]);
    }
}
