<?php

namespace App\Filament\Resources\AlamatResource\Pages;

use App\Filament\Resources\AlamatResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAlamats extends ListRecords
{
    protected static string $resource = AlamatResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
