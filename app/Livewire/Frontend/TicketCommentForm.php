<?php

namespace App\Livewire\Frontend;

use App\Models\Ticket;
use App\Models\Comment;
use Livewire\Component;

class TicketCommentForm extends Component
{
    public Ticket $ticket;
    public string $comment = '';
    public $comments = [];

    protected $rules = [
        'comment' => 'required|string|min:3',
    ];

    public function mount()
    {
        $this->loadComments();
    }

    public function loadComments()
    {
        $this->comments = Comment::where('tiket_id', $this->ticket->id)
            ->latest()
            ->take(20)
            ->get();
    }

   public function submit()
{
    $this->validate();

    $ticket = $this->ticket;

    // ✅ Tentukan receiver
    if (auth()->user()->hasAnyRole(['Admin Unit', 'Staf Unit'])) {
        $receiver = $ticket->owner;
    } else {
        $receiver = \App\Models\User::role('Admin Unit')
            ->orWhereHas('roles', fn ($q) => $q->where('name', 'Staf Unit'))
            ->first();
    }

    // ✅ Buat komentar
    $comment = Comment::create([
        'tiket_id' => $ticket->id,
        'user_id' => auth()->id(),
        'comment' => $this->comment,
        'sender_id' => auth()->id(),
        'receiver_id' => $receiver?->id, // pakai null-safe untuk jaga-jaga
    ]);

    $this->reset('comment');
    $this->loadComments();
}


    public function render()
    {
        return view('livewire.frontend.ticket-comment-form');
    }
}
