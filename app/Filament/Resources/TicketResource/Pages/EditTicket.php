<?php

namespace App\Filament\Resources\TicketResource\Pages;

use App\Filament\Resources\TicketResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTicket extends EditRecord
{
    protected static string $resource = TicketResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }

    // Jika pakai Filament 3
public function afterSave(): void
{
    activity()
        ->performedOn($this->record)
        ->causedBy(auth()->user())
        ->withProperties([
            'status' => $this->record->status->name ?? 'Unknown', // atau ticket_statuses_id
            'message' => 'Status diperbarui oleh admin',
        ])
        ->log('Tiket diperbarui');
}
}
