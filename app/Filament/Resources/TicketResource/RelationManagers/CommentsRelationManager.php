<?php

namespace App\Filament\Resources\TicketResource\RelationManagers;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Events\MessageSendEvent;
use Filament\Forms\Components\Card;
use Livewire\Component as Livewire;
use Filament\Tables\Columns\TextColumn;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use App\Filament\Resources\TicketResource;
use Filament\Notifications\Actions\Action;
use Filament\Resources\RelationManagers\RelationManager;

class CommentsRelationManager extends RelationManager
{
    protected static string $relationship = 'comments';

    protected static ?string $recordTitleAttribute = 'comment';

    protected function isTablePaginationEnabled(): bool
    {
        return false;
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Forms\Components\RichEditor::make('comment')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\FileUpload::make('attachments')
                        ->directory('comment-attachments/' . date('m-y'))
                        ->maxSize(2000)
                        ->enableDownload(),
                ])
            ]);
    }

public function table(Table $table): Table
{
    return $table
        ->poll('5s') // Untuk tetap realtime jika belum semua sisi pakai listener JS
        ->columns([
            Stack::make([
                Split::make([
                    TextColumn::make('user.name')
                        ->translateLabel()
                        ->weight('bold')
                        ->grow(false),
                    TextColumn::make('created_at')
                        ->translateLabel()
                        ->dateTime()
                        ->color('secondary'),
                ]),
                TextColumn::make('comment')
                    ->wrap()
                    ->html(),
            ]),
        ])
        ->filters([])
        ->headerActions([
            Tables\Actions\CreateAction::make()
                ->mutateFormDataUsing(function (array $data): array {
                    $data['user_id'] = auth()->id(); // Set user login sebagai pengirim
                    return $data;
                })
                ->label('Tambah Komentar')
                ->after(function (Livewire $livewire) {
                    $ticket = $livewire->ownerRecord;

                    // Ambil komentar terakhir (baru saja dibuat)
                    $comment = $ticket->comments()->latest()->first();

                    // Tentukan penerima
                    if (auth()->user()->hasAnyRole(['Admin Unit', 'Staf Unit'])) {
                        $receiver = $ticket->owner; // Kirim ke pemilik tiket
                    } else {
                        $receiver = User::role('Admin Unit')
                            ->orWhereHas('roles', fn($q) => $q->where('name', 'Staf Unit'))
                            ->first();
                    }

                    // Kirim notifikasi biasa (opsional)
                    Notification::make()
                        ->title('Terdapat komentar baru pada tiket Anda')
                        ->actions([
                            Action::make('Lihat')
                                ->url(TicketResource::getUrl('view', ['record' => $ticket->id])),
                        ])
                        ->sendToDatabase($receiver);

                    // ✅ Kirim broadcast realtime via Reverb
                    if ($comment) {
                        broadcast(new MessageSendEvent($comment))->toOthers();
                    }
                }),
        ])
        ->actions([
            Tables\Actions\Action::make('attachment')->action(function ($record) {
                return response()->download('storage/' . $record->attachments);
            })->hidden(fn ($record) => $record->attachments == ''),
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([]);
}

}
