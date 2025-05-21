<?php

namespace Ijpatricio\SkimTemplateFrequencii\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Ijpatricio\Skim\Contracts\HasBlock;

class Hero1 implements HasBlock
{
    public static function getBlock(): Block
    {
        return Block::make('hero1')
            ->label('Hero 1')
            ->preview('skim::filament.forms.block-preview')
            ->viewData([
                'block_name' => 'Hero 1',
            ])
            ->schema([
                TextInput::make('title'),
                TextInput::make('subtitle'),
                TextInput::make('top_button_text'),
                TextInput::make('top_button_link'),
                FileUpload::make('main_image'),
            ]);
    }
}
