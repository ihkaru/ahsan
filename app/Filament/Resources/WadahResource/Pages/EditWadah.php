<?php

namespace App\Filament\Resources\WadahResource\Pages;

use App\Filament\Resources\WadahResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWadah extends EditRecord
{
    protected static string $resource = WadahResource::class;

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
