<?php

declare(strict_types=1);

namespace App\Filament\Resources\ContactMessages\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;

class ContactMessageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(2)
                    ->schema([
                        TextInput::make('first_name')
                            ->label('First Name')
                            ->disabled(),

                        TextInput::make('last_name')
                            ->label('Last Name')
                            ->disabled(),

                        TextInput::make('email')
                            ->label('Email Address')
                            ->email()
                            ->disabled(),

                        TextInput::make('company')
                            ->label('Company / Organization')
                            ->disabled(),
                    ]),

                TextInput::make('subject')
                    ->label('Subject')
                    ->disabled(),

                Textarea::make('message')
                    ->label('Message Content')
                    ->rows(6)
                    ->disabled(),
            ]);
    }
}