<?php

namespace App\Filament\Resources\WadahResource\Pages;

use App\Filament\Resources\WadahResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWadahs extends ListRecords
{
    protected static string $resource = WadahResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
