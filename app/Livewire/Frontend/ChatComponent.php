<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\Ticket;
use App\Models\Comment;
use App\Events\MessageSendEvent;
use Livewire\Attributes\On;

class ChatComponent extends Component
{
    public Ticket $ticket;
    public string $comment = '';
    public $comments = [];

    protected $rules = [
        'comment' => 'required|string|min:3',
    ];

    public function mount(Ticket $ticket)
    {
        $this->ticket = $ticket;
        $this->loadComments();
    }

    public function loadComments()
    {
        $this->comments = Comment::where('ticket_id', $this->ticket->id)
            ->with('user')
            ->latest()
            ->get()
            ->toArray();
    }

    public function appendChatMessage($comment)
    {
        array_unshift($this->comments, $comment);
    }

  public function submit()
{
    $this->validate();

    $ticket = $this->ticket;

    // ✅ Tentukan penerima komentar (receiver)
    if (auth()->user()->hasAnyRole(['Admin Unit', 'Staf Unit'])) {
        $receiver = $ticket->owner;
    } else {
        $receiver = \App\Models\User::role('Admin Unit')
            ->orWhereHas('roles', fn ($q) => $q->where('name', 'Staf Unit'))
            ->first();
    }

    // ✅ Simpan komentar
    $comment = Comment::create([
        'ticket_id' => $ticket->id,
        'user_id' => auth()->id(),
        'comment' => $this->comment,
        'sender_id' => auth()->id(),
        'receiver_id' => $receiver?->id, // pakai null safe
    ]);

    // ✅ Broadcast ke user lain
    broadcast(new MessageSendEvent($comment))->toOthers();

    $this->appendChatMessage($comment->toArray());
    $this->reset('comment');
}


    #[On('new-message')]
    public function receiveRealtimeMessage($event)
    {
        $comment = Comment::with('user')->find($event['message']['id']);
        if ($comment) {
            $this->appendChatMessage($comment->toArray());
        }
    }

    public function render()
    {
        return view('livewire.frontend.chat-component');
    }
}
