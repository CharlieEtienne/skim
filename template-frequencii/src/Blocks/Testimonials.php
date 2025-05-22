<?php

namespace Ijpatricio\SkimTemplateFrequencii\Blocks;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Ijpatricio\Skim\Contracts\HasBlock;

class Testimonials implements HasBlock
{
    public static function getBlock(): Block
    {
        return Block::make('testimonials')
           ->label('Testimonials')
            ->preview('skim::filament.forms.block-preview')
            ->viewData([
                'block_name' => 'Testimonials',
            ])
            ->schema([
                TextInput::make('badge')->helperText('Default: "Testimonials"'),
                TextInput::make('title'),

                Repeater::make('testimonials')
                    ->collapsible()
                    ->itemLabel(fn (array $state) => $state['author'] ?? 'Testimonial')
                    ->label('Testimonials')
                    ->schema([
                        FileUpload::make('logo')
                            ->image()
                            ->label('Logo'),
                        Textarea::make('testimonial')
                            ->label('Testimonial'),
                        TextInput::make('author')
                            ->live(onBlur: true)
                            ->label('Author'),
                        TextInput::make('title')
                            ->label('Author Title'),
                        FileUpload::make('avatar')
                            ->image()
                            ->avatar()
                            ->label('Avatar'),
                    ])
                    ->columns(3),
            ]);
    }
}
