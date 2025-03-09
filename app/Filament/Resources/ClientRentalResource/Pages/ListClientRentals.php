<?php

namespace App\Filament\Resources\ClientRentalResource\Pages;

use App\Filament\Resources\ClientRentalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClientRentals extends ListRecords
{
    protected static string $resource = ClientRentalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
