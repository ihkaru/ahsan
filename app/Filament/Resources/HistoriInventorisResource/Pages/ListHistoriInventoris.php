<?php

namespace App\Filament\Resources\HistoriInventorisResource\Pages;

use App\Filament\Resources\HistoriInventorisResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHistoriInventoris extends ListRecords
{
    protected static string $resource = HistoriInventorisResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
