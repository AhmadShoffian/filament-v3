<?php

namespace App\Filament\Resources\PeranResource\Pages;

use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\PeranResource;
use Filament\Pages\Actions;

class ViewPeran extends ViewRecord
{
    protected static string $resource = PeranResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
