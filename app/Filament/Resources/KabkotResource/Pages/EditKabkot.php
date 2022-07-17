<?php

namespace App\Filament\Resources\KabkotResource\Pages;

use App\Filament\Resources\KabkotResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKabkot extends EditRecord
{
    protected static string $resource = KabkotResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
