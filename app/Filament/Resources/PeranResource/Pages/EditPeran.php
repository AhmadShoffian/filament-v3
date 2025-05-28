<?php

namespace App\Filament\Resources\PeranResource\Pages;

use App\Filament\Resources\PeranResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPeran extends EditRecord
{
    protected static string $resource = PeranResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
