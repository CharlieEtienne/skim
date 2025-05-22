<?php

namespace Ijpatricio\SkimTemplateFrequencii\Blocks;

use Filament\Forms\Get;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Ijpatricio\Skim\Contracts\HasBlock;

class Faq implements HasBlock
{
    public static function getBlock(): Block
    {
        return Block::make('faq')
            ->label('FAQ')
            ->preview('skim::filament.forms.block-preview')
            ->viewData([
                'block_name' => 'FAQ',
            ])
            ->schema([
                TextInput::make('title')->placeholder('Frequently asked questions'),
                Textarea::make('subtitle')->placeholder('Everything you need to know about the product.'),

                Repeater::make('questions')
                    ->label('Questions')
                    ->itemLabel(fn (array $state) => $state['question'] ?? 'Question')
                    ->schema([
                        TextInput::make('question')->live(onBlur: true),
                        TextInput::make('answer'),
                    ]),

                Fieldset::make('cta')
                    ->label('Call to action')->schema([
                        Toggle::make('cta.active')
                            ->label('Active')
                            ->columnSpanFull(),
                        FileUpload::make('cta.avatar')
                            ->columnSpanFull()
                            ->image()
                            ->avatar()
                            ->label('Avatar'),
                        TextInput::make('cta.title'),
                        TextInput::make('cta.subtitle'),
                        TextInput::make('cta.button_text'),
                        TextInput::make('cta.button_link'),
                    ])
            ]);
    }
}
