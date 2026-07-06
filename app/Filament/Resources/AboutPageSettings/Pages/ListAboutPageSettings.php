<?php

namespace App\Filament\Resources\AboutPageSettings\Pages;

use App\Filament\Resources\AboutPageSettings\AboutPageSettingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAboutPageSettings extends ListRecords
{
    protected static string $resource = AboutPageSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
