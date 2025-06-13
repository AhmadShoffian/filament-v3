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

        Comment::create([
            'tiket_id' => $this->ticket->id,
            'user_id' => auth()->id(),
            'comment' => $this->comment,
        ]);

        $this->reset('comment');
        $this->loadComments();
    }

    public function render()
    {
        return view('livewire.frontend.ticket-comment-form');
    }
}
