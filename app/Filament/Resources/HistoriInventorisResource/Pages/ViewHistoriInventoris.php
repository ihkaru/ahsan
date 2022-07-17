<?php

namespace App\Filament\Resources\HistoriInventorisResource\Pages;

use App\Filament\Resources\HistoriInventorisResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewHistoriInventoris extends ViewRecord
{
    protected static string $resource = HistoriInventorisResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
