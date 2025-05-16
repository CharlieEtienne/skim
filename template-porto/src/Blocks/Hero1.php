<?php

namespace Ijpatricio\SkimTemplatePorto\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Ijpatricio\Skim\Contracts\HasBlock;

class Hero1 implements HasBlock
{
    public static function getBlock(): Block
    {
        return Block::make('hero1')
            ->label('Hero A')
            ->preview('skim-template-porto::blocks.hero1')
            ->schema([
                FileUpload::make('logo'),
                TextInput::make('top_button_text'),
                FileUpload::make('main_image'),
                TextInput::make('pre_title'),
                TextInput::make('title'),
                TextInput::make('subtitle'),
                TextInput::make('bottom_button_text'),
            ]);
    }
}
