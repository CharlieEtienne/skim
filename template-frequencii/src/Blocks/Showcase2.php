<?php

namespace Ijpatricio\SkimTemplateFrequencii\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Ijpatricio\Skim\Contracts\HasBlock;

class Showcase2 implements HasBlock
{
    public static function getBlock(): Block
    {
        return Block::make('showcase2')
            ->label('Showcase 2')
            ->preview('skim::filament.forms.block-preview')
            ->viewData([
                'block_name' => 'Showcase 2',
            ])
            ->schema([
                TextInput::make('main_heading')
                    ->label('Main Heading')
                    ->default('Please do not measure your skills in percentages!'),
                TextInput::make('description')
                    ->label('Description')
                    ->default('In my many years of experience, I use @laravel for backend projects and @vuejs for front-end projects. I\'m an avid programmer, so I create designs based on the weekend @figmadesign.'),
            ]);
    }
}
