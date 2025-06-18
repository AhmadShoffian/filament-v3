<?php

namespace App\Filament\Resources\TicketResource\Pages;

use Filament\Forms;
use Filament\Pages\Actions;
use Filament\Pages\Actions\Action;
use Illuminate\Support\Facades\Storage;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\TicketResource;

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

            Action::make('selesaikan')
                ->label('Selesaikan Tiket')
                ->icon('heroicon-m-check-badge')
                ->color('success')
                ->form([
                    Forms\Components\TextInput::make('admin_name')
                        ->label('Nama Admin')
                        ->default(auth()->user()->name)
                        ->disabled()
                        ->dehydrated(false),

                    Forms\Components\Textarea::make('deskripsi')
                        ->label('Deskripsi Penyelesaian')
                        ->required(),

                    Forms\Components\FileUpload::make('gambar')
                        ->label('Lampiran / Bukti Gambar')
                        ->image()
                        ->directory('penyelesaian-tiket')
                        ->maxSize(2048)
                        ->required(),
                ])
                ->action(function (array $data) {
                    $this->record->update([
                        'status_id' => 3,
                        'catatan_penyelesaian' => $data['deskripsi'],
                        'gambar_penyelesaian' => $data['gambar'] ?? null,
                    ]);

                    // Pastikan relasi ticketStatus ter-load ulang
                    $this->record->refresh();

                    activity()
                        ->performedOn($this->record)
                        ->causedBy(auth()->user())
                        ->withProperties([
                            'status' => $this->record->ticketStatus->name ?? 'Closed',
                            'deskripsi' => $data['deskripsi'],
                            'gambar' => $data['gambar'],
                        ])
                        ->log('Tiket diselesaikan');

                    Notification::make()
                        ->title('Tiket berhasil diselesaikan.')
                        ->success()
                        ->send();
                }),

        ];
    }
}
