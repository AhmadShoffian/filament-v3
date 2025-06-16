<?php

namespace App\Livewire\Frontend;

use Filament\Tables;
use App\Models\Ticket;
use App\Models\Comment;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\TicketComment;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Support\Contracts\TranslatableContentDriver;

#[On('commentAdded')]

class TicketCommentsTable extends Component implements HasTable, HasForms

{
    use InteractsWithTable, InteractsWithForms;


    public bool $isCachingForms = false;

    public Ticket $ticket;

    protected function getTableQuery(): Builder
    {
        return Comment::query()
            ->where('ticket_id', $this->ticket->id) // Ganti jika kolomnya "tilet_id"
            ->latest();
    }


   protected function getTableColumns(): array
    {
        return [
            Stack::make([
                Split::make([
                    TextColumn::make('user.name')
                        ->label('Nama')
                        ->weight('bold'),
                    TextColumn::make('created_at')
                        ->label('Tanggal')
                        ->since() // Lebih enak dibaca, misal: "2 minutes ago"
                        ->color('secondary'),
                ]),
                TextColumn::make('comment')
                    ->label('Komentar')
                    ->wrap(),
            ]),
        ];
    }


    public function render()
    {
        return view('livewire.frontend.ticket-comments-table');
    }


    public function commentAdded()
    {
        $this->resetTable(); // reload data di tabel
    }




    public function makeFilamentTranslatableContentDriver(): ?TranslatableContentDriver
    {
        return null;
    }
}
