<?php

namespace App\Livewire\Frontend;

use App\Models\Ticket;
use App\Models\Comment;
use Livewire\Component;
use Livewire\Attributes\On;

#[On('commentAdded')]
class TicketCommentsList extends Component
{
    public Ticket $ticket;
    public $comments = [];

    public function mount()
    {
        $this->loadComments();
    }

    public function loadComments()
    {
        $this->comments = Comment::where('ticket_id', $this->ticket->id)
            ->latest()
            ->get();
    }

    public function commentAdded()
    {
        $this->loadComments(); // Inilah yang dipicu dari event
    }

    public function render()
    {
        return view('livewire.frontend.ticket-comments-list');
    }
}
