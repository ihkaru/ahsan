<?php

namespace App\Filament\Resources\FotoResource\Pages;

use App\Filament\Resources\FotoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFoto extends ViewRecord
{
    protected static string $resource = FotoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
