<?php

namespace App\Filament\Resources\AboutPageSettings\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;

class AboutPageSettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('hero_title_line1')
                    ->label('Current Title Setup')
                    ->searchable(),
                
                TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                // Note: Since this is likely a single-page settings record, 
                // you might want to remove DeleteBulkAction to prevent deleting your only settings row!
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}