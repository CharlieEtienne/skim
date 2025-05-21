<?php

namespace Ijpatricio\SkimTemplatePorto\Blocks;

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
                TextInput::make('title'),
                TextInput::make('subtitle'),
                Repeater::make('testimonials')
                    ->label('Testimonials')
                    ->schema([
                        Textarea::make('testimonial_text'),
                        TextInput::make('author_name'),
                        TextInput::make('author_title'),
                    ])
                    ->addActionLabel('Add Testimonial')
            ]);
    }
}
