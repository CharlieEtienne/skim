<?php

namespace Ijpatricio\SkimTemplatePorto\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Ijpatricio\Skim\Contracts\HasBlock;

class Testimonial1 implements HasBlock
{
    public static function getBlock(): Block
    {
        return Block::make('testimonial1')
            ->label('Testimonial 1')
            ->preview('skim::filament.forms.block-preview')
            ->viewData([
                'block_name' => 'Testimonial 1',
            ])
            ->schema([
                TextInput::make('title')
                    ->label('Section Title')
                    ->default('Brands'),
                TextInput::make('subtitle')
                    ->label('Section Subtitle')
                    ->default('Below is a summary of the places I studied'),
                FileUpload::make('brand_image_1')
                    ->label('Brand Image 1'),
                FileUpload::make('brand_image_2')
                    ->label('Brand Image 2'),
                FileUpload::make('brand_image_3')
                    ->label('Brand Image 3'),
                FileUpload::make('brand_image_4')
                    ->label('Brand Image 4'),
                FileUpload::make('brand_image_5')
                    ->label('Brand Image 5'),
                FileUpload::make('brand_image_6')
                    ->label('Brand Image 6'),
            ]);
    }
}
