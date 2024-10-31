<?php

namespace App\Filament\Resources\PemasaranResource\Pages;

use App\Filament\Resources\PemasaranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPemasaran extends EditRecord
{
    protected static string $resource = PemasaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
