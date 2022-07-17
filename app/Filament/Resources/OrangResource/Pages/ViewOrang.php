<?php

namespace App\Filament\Resources\OrangResource\Pages;

use App\Filament\Resources\OrangResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewOrang extends ViewRecord
{
    protected static string $resource = OrangResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
