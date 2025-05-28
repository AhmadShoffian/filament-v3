<?php

namespace App\Filament\Resources\UnitKerjaResource\Pages;

use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\UnitKerjaResource;
use Filament\Pages\Actions;

class ViewUnitKerja extends ViewRecord
{
    protected static string $resource = UnitKerjaResource::class;

     protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
