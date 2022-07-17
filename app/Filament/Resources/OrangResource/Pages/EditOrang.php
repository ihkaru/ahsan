<?php

namespace App\Filament\Resources\OrangResource\Pages;

use App\Filament\Resources\OrangResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrang extends EditRecord
{
    protected static string $resource = OrangResource::class;

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
