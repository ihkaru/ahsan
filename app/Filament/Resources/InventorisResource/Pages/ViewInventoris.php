<?php

namespace App\Filament\Resources\InventorisResource\Pages;

use App\Filament\Resources\InventorisResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewInventoris extends ViewRecord
{
    protected static string $resource = InventorisResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
