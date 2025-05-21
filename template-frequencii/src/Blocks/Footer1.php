<?php

namespace Ijpatricio\SkimTemplateFrequencii\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Ijpatricio\Skim\Contracts\HasBlock;

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
                TextInput::make('section_title')
                    ->label('Section Title')
                    ->default('Testimonial'),
                TextInput::make('section_subtitle')
                    ->label('Section Subtitle')
                    ->default('I\'m not currently taking on new client work but feel free to contact me for any other inquiries.'),

                TextInput::make('social1_icon')
                    ->label('Social Media 1 Icon')
                    ->default('twitter'),
                TextInput::make('social1_url')
                    ->label('Social Media 1 URL')
                    ->default('#'),

                TextInput::make('social2_icon')
                    ->label('Social Media 2 Icon')
                    ->default('dribbble'),
                TextInput::make('social2_url')
                    ->label('Social Media 2 URL')
                    ->default('#'),

                TextInput::make('social3_icon')
                    ->label('Social Media 3 Icon')
                    ->default('facebook'),
                TextInput::make('social3_url')
                    ->label('Social Media 3 URL')
                    ->default('#'),

                TextInput::make('social4_icon')
                    ->label('Social Media 4 Icon')
                    ->default('codepen'),
                TextInput::make('social4_url')
                    ->label('Social Media 4 URL')
                    ->default('#'),

                TextInput::make('social5_icon')
                    ->label('Social Media 5 Icon')
                    ->default('at-sign'),
                TextInput::make('social5_url')
                    ->label('Social Media 5 URL')
                    ->default('#'),

                TextInput::make('social6_icon')
                    ->label('Social Media 6 Icon')
                    ->default('instagram'),
                TextInput::make('social6_url')
                    ->label('Social Media 6 URL')
                    ->default('#'),
            ]);
    }
}
