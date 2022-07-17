<?php

namespace App\Filament\Resources\HistoriInventorisResource\Pages;

use App\Filament\Resources\HistoriInventorisResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHistoriInventoris extends EditRecord
{
    protected static string $resource = HistoriInventorisResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
