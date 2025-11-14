<?php

namespace App\Filament\Resources\SpmbResource\Pages;

use App\Filament\Resources\SpmbResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSpmb extends EditRecord
{
    protected static string $resource = SpmbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
