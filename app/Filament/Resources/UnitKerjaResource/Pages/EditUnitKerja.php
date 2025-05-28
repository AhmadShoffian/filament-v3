<?php

namespace App\Filament\Resources\UnitKerjaResource\Pages;

use App\Filament\Resources\UnitKerjaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUnitKerja extends EditRecord
{
    protected static string $resource = UnitKerjaResource::class;

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
