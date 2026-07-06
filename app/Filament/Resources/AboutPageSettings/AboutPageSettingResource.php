<?php

namespace App\Filament\Resources\AboutPageSettings;

use App\Filament\Resources\AboutPageSettings\Pages\CreateAboutPageSetting;
use App\Filament\Resources\AboutPageSettings\Pages\EditAboutPageSetting;
use App\Filament\Resources\AboutPageSettings\Pages\ListAboutPageSettings;
use App\Filament\Resources\AboutPageSettings\Schemas\AboutPageSettingForm;
use App\Filament\Resources\AboutPageSettings\Tables\AboutPageSettingsTable;
use App\Models\AboutPageSetting;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AboutPageSettingResource extends Resource
{
    protected static ?string $model = AboutPageSetting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Name';

    public static function form(Schema $schema): Schema
    {
        return AboutPageSettingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AboutPageSettingsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAboutPageSettings::route('/'),
            'create' => CreateAboutPageSetting::route('/create'),
            'edit' => EditAboutPageSetting::route('/{record}/edit'),
        ];
    }
}
