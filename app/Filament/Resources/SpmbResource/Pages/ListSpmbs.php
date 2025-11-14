<?php

namespace App\Filament\Resources\SpmbResource\Pages;

use App\Filament\Resources\SpmbResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSpmbs extends ListRecords
{
    protected static string $resource = SpmbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
