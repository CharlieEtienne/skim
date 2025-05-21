<?php

namespace Ijpatricio\SkimTemplateFrequencii\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Ijpatricio\Skim\Contracts\HasBlock;

class Testimonial2 implements HasBlock
{
    public static function getBlock(): Block
    {
        return Block::make('testimonial2')
            ->label('Testimonial 2')
            ->preview('skim::filament.forms.block-preview')
            ->viewData([
                'block_name' => 'Testimonial 2',
            ])
            ->schema([
                TextInput::make('title')
                    ->label('Section Title')
                    ->default('Testimonial'),
                TextInput::make('subtitle')
                    ->label('Section Subtitle')
                    ->default('Below is a summary of the places I studied'),
                Repeater::make('testimonials')
                    ->label('Testimonials')
                    ->schema([
                        Textarea::make('testimonial_text')
                            ->label('Testimonial Text')
                            ->default('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
                        TextInput::make('author_name')
                            ->label('Author Name')
                            ->default('Stephan Clark'),
                        TextInput::make('author_title')
                            ->label('Author Title')
                            ->default('- CEO at EarlyBird'),
                    ])
                    ->defaultItems(6)
                    ->createItemButtonLabel('Add Testimonial')
            ]);
    }
}
