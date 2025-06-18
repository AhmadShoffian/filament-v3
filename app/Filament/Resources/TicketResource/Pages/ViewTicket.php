<?php

namespace App\Filament\Resources\TicketResource\Pages;

use Filament\Pages\Actions;
use Illuminate\Support\Facades\Storage;
use Spatie\Activitylog\Models\Activity;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\TicketResource;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\RepeatableEntry;

class ViewTicket extends ViewRecord
{
    protected static string $resource = TicketResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }

    public function getInfolistSchema(): array
    {
        return [
            Section::make('Informasi Tiket')
                ->schema([
                    TextEntry::make('username')->label('Nama Pengguna'),
                    TextEntry::make('email')->label('Email'),
                    TextEntry::make('title')->label('Judul Tiket'),
                    TextEntry::make('description')->label('Deskripsi'),
                ])
                ->columns(2),

            Section::make('Riwayat Pekerjaan')
                ->schema([
                    RepeatableEntry::make('log_history')
                        ->label('Riwayat')
                        ->state(function ($record) {
                            return Activity::query()
                                ->where('subject_type', get_class($record))
                                ->where('subject_id', $record->id)
                                ->latest()
                                ->get()
                                ->map(function ($log) {
                                    return [
                                        'created_at' => $log->created_at->format('d-m-Y / H:i:s'),
                                        'description' => $log->description,
                                        'status' => $log->properties['status'] ?? null,
                                        'message' => $log->properties['message'] ?? null,
                                    ];
                                })->toArray();
                        })
                        ->schema([
                            TextEntry::make('created_at')->label('Waktu'),
                            TextEntry::make('description')->label('Aksi'),
                            TextEntry::make('status')
                                ->label('Status')
                                ->badge()
                                ->color(fn($state) => match ($state) {
                                    'Open' => 'success',
                                    'Processed' => 'warning',
                                    'Closed' => 'danger',
                                    default => 'gray',
                                }),
                            TextEntry::make('message')->label('Keterangan'),
                        ])
                        ->columns(2)
                        ->visible(fn($record) => $record !== null),
                ]),

            Section::make('Penyelesaian Tiket')
                ->schema([
                    TextEntry::make('catatan_penyelesaian')
                        ->label('Deskripsi Penyelesaian')
                        ->markdown()
                        ->visible(fn($record) => filled($record->catatan_penyelesaian)),

                    TextEntry::make('gambar_penyelesaian')
                        ->label('Lampiran Gambar')
                        ->visible(fn($record) => filled($record->gambar_penyelesaian))
                        ->formatStateUsing(fn($state) => '<img src="' . Storage::url($state) . '" class="w-32 rounded shadow">')
                        ->html(),
                ])
                ->visible(fn($record) => filled($record->catatan_penyelesaian))
                ->columns(1),

        ];
    }
}
