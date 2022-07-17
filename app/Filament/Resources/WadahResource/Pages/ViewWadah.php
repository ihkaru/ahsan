<?php

namespace App\Filament\Resources\WadahResource\Pages;

use App\Filament\Resources\WadahResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewWadah extends ViewRecord
{
    protected static string $resource = WadahResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
