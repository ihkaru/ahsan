<?php

namespace App\Filament\Resources\KabkotResource\Pages;

use App\Filament\Resources\KabkotResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKabkots extends ListRecords
{
    protected static string $resource = KabkotResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
