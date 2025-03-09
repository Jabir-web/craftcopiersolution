<?php

namespace App\Filament\Resources\AccessoryRequestResource\Pages;

use App\Filament\Resources\AccessoryRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAccessoryRequest extends EditRecord
{
    protected static string $resource = AccessoryRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
