<?php

namespace App\Filament\Resources\OrangResource\Pages;

use App\Filament\Resources\OrangResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrangs extends ListRecords
{
    protected static string $resource = OrangResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
