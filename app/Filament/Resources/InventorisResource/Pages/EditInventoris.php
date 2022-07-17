<?php

namespace App\Filament\Resources\InventorisResource\Pages;

use App\Filament\Resources\InventorisResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventoris extends EditRecord
{
    protected static string $resource = InventorisResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
