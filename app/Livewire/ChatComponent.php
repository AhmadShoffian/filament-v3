<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Ticket;
use App\Models\Comment;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Events\MessageSendEvent;

class ChatComponent extends Component
{
    public $user;
    public $sender_id;
    public $ticket;
    public $ticket_id;
    public $receiver_id;
    public $comment = '';
    public $messages = [];

    public function render()
    {
        // dd($this->messages);
        return view('livewire.chat-component');
    }

    public function mount($ticket_id)
    {
        $this->ticket_id = $ticket_id;
        $this->sender_id = auth()->id();
        $this->ticket = Ticket::findOrFail($ticket_id);

        // ✅ Tentukan receiver berdasarkan role
        if (auth()->user()->hasAnyRole(['Admin Unit', 'Staf Unit'])) {
            $this->receiver_id = $this->ticket->owner_id;
        } else {
            $this->receiver_id = User::role('Admin Unit')
                ->orWhereHas('roles', fn($q) => $q->where('name', 'Staf Unit'))
                ->first()?->id;
        }

        // ✅ Ambil komentar berdasarkan tiket
        $comments = Comment::where('ticket_id', $this->ticket->id)
            ->with('sender:id,name', 'receiver:id,name')
            ->orderBy('created_at', 'asc')
            ->get();

        foreach ($comments as $comment) {
            $this->appendChatMessage($comment);
        }
    }



    public function sendMessage()
    {
        if (trim($this->comment) === '') return;

        // Tambahkan proteksi
        if (!$this->receiver_id || !$this->ticket_id) {
            throw new \Exception('receiver_id atau ticket_id belum terisi!');
        }

        logger()->debug('Send Message Vars', [
            'sender_id' => $this->sender_id,
            'receiver_id' => $this->receiver_id,
            'ticket_id' => $this->ticket_id,
            'comment' => $this->comment,
        ]);


        $chatMessage = Comment::create([
            'sender_id'   => $this->sender_id,
            'receiver_id' => $this->receiver_id,
            'ticket_id'   => $this->ticket_id,
            'comment'     => $this->comment,
            'user_id'     => $this->sender_id,
        ]);

        $chatMessage->load('sender:id,name', 'receiver:id,name');

        $this->appendChatMessage($chatMessage);
        broadcast(new MessageSendEvent($chatMessage))->toOthers();

        $this->comment = '';
    }




    #[On('echo-private:chat-channel.*,message.sent')]
    public function listenForMessage($event)
    {
        logger()->info('Menerima event message.sent', $event);

        $chatMessage = Comment::whereId($event['message']['id'])
            ->with('sender:id,name', 'receiver:id,name')
            ->first();

        if ($chatMessage->sender_id !== auth()->id()) {
            $this->appendChatMessage($chatMessage);
        }
    }

    public function appendChatMessage($message)
    {
        $this->messages[] = [
            'id' => $message->id,
            'sender_id' => $message->sender_id,
            'message' => $message->comment,
            'sender' => $message->sender->name,
            'receiver' => $message->receiver->name
        ];
    }
}
