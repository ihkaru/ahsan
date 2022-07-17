<?php

namespace App\Filament\Resources\KabkotResource\Pages;

use App\Filament\Resources\KabkotResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKabkot extends ViewRecord
{
    protected static string $resource = KabkotResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
