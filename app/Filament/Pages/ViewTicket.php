<?php

namespace App\Filament\Pages;

use App\Models\Ticket;
use Filament\Pages\Page;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Notification;

class ViewTicket extends Page
{
    use WithFileUploads;

    public ?Ticket $ticket = null;
    public $newComment = '';
    public $attachment;

    protected static string $view = 'filament.pages.view-ticket';

    public function mount(Ticket $ticket)
    {
        $this->ticket = $ticket;
    }

    public function submitComment()
    {
        $this->validate([
            'newComment' => 'required|string',
            'attachment' => 'nullable|file|max:2048',
        ]);

        $path = $this->attachment ? $this->attachment->store('attachments', 'public') : null;

        $this->ticket->comments()->create([
            'user_id' => auth()->id(),
            'comment' => $this->newComment,
            'attachments' => $path,
        ]);

        $this->reset(['newComment', 'attachment']);

        Notification::make()
            ->title('Komentar ditambahkan')
            ->success()
            ->send();
    }
}
