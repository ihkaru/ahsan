<?php

namespace App\Filament\Resources\InventorisResource\Pages;

use App\Filament\Resources\InventorisResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventoris extends ListRecords
{
    protected static string $resource = InventorisResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
