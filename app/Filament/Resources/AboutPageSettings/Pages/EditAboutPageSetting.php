<?php

namespace App\Filament\Resources\AboutPageSettings\Pages;

use App\Filament\Resources\AboutPageSettings\AboutPageSettingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAboutPageSetting extends EditRecord
{
    protected static string $resource = AboutPageSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
