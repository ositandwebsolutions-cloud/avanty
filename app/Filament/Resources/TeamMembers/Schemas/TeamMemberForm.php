<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section; // <-- Correct Layout Namespace
use Filament\Forms\Components\TextInput; // <-- Correct Input Namespace
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use App\Models\TeamMember;

class TeamMemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Member Details')->schema([
                    
                    TextInput::make('name')
                        ->required()
                        ->maxLength(255)
                        ->live(onBlur: true)
                        ->afterStateUpdated(function (Set $set, ?string $state, string $operation) {
                            if ($operation === 'create' && filled($state)) {
                                $set('slug', Str::slug($state));
                            }
                        }),
                        
                    TextInput::make('slug')
                        ->required()
                        ->maxLength(255)
                        ->disabled()
                        ->dehydrated()
                        ->unique(TeamMember::class, 'slug', ignoreRecord: true),
                        
                    TextInput::make('title')
                        ->required()
                        ->maxLength(255)
                        ->label('Job Title / Role'),
                        
                    TextInput::make('sort_order')
                        ->numeric()
                        ->default(0),

                    Repeater::make('bio_sections')
                        ->label('Biography Sections (Overlay Data)')
                        ->schema([
                            Select::make('icon')
                                ->options([
                                    'person' => 'Person / Executive Overview',
                                    'briefcase' => 'Briefcase / Professional Bio',
                                    'chart' => 'Chart / Growth',
                                    'bank' => 'Bank / Financials',
                                    'edu' => 'Education',
                                ])
                                ->required(),
                                
                            TextInput::make('title')
                                ->label('Section Title')
                                ->placeholder('e.g., EXECUTIVE OVERVIEW')
                                ->maxLength(255)
                                ->required(),
                                
                            RichEditor::make('content')
                                ->label('Content')
                                ->toolbarButtons([
                                    'bold', 'italic', 'bulletList', 'orderedList', 'undo', 'redo'
                                ])
                                ->required(),
                        ])
                        ->collapsible()
                        ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                        ->columns(1)
                ])
            ]);
    }
}