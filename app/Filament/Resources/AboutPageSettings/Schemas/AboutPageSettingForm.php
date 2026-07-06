<?php

namespace App\Filament\Resources\AboutPageSettings\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;

class AboutPageSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Heading')
                    ->tabs([
                        Tab::make('Hero Section')
                            ->schema([
                                TextInput::make('hero_eyebrow')
                                    ->required(),
                                    
                                TextInput::make('hero_title_line1')
                                    ->required(),
                                    
                                TextInput::make('hero_title_line2_gold')
                                    ->required(),
                                    
                                FileUpload::make('hero_image')
                                    ->image()
                                    ->directory('about-page')
                                    ->label('Hero Background Image'),
                                    
                                Repeater::make('hero_paragraphs')
                                    ->simple(Textarea::make('paragraph')->required())
                                    ->label('Hero Paragraph Elements')
                            ]),
                            
                        Tab::make('Foundation Section')
                            ->schema([
                                TextInput::make('foundation_eyebrow')
                                    ->required(),
                                    
                                TextInput::make('foundation_title')
                                    ->required(),
                                    
                                Repeater::make('foundation_cards')
                                    ->label('Foundation Cards (Max 4 Items Recommend)')
                                    ->schema([
                                        TextInput::make('title')->required(),
                                        Textarea::make('description')->required(),
                                    ])
                                    ->maxItems(4)
                                    ->columns(1)
                            ]),
                            
                        Tab::make('Leadership Content')
                            ->schema([
                                TextInput::make('leadership_title')
                                    ->required(),
                                    
                                TextInput::make('leadership_eyebrow')
                                    ->required(),
                                    
                                Textarea::make('leadership_description')
                                    ->rows(6)
                                    ->required(),
                            ]),
                    ])->columnSpanFull()
            ]);
    }
}