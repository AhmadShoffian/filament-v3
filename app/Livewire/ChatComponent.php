<?php

namespace App\Livewire;

use App\Events\MessageSendEvent;
use App\Models\Comment;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class ChatComponent extends Component
{
    public $user;
    public $sender_id;
    public $ticket_id;
    public $receiver_id;
    public $comment = '';
    public $messages = [];

    public function render()
    {
        // dd($this->messages);
        return view('livewire.chat-component');
    }

    public function mount($user_id, $ticket_id)
    {
        $this->sender_id = auth()->user()->id;
        $this->receiver_id = $user_id;
        $this->ticket_id = $ticket_id;


        $messages = Comment::where(function ($query) {
            $query->where('sender_id', $this->sender_id)
                ->where('receiver_id', $this->receiver_id);
        })->orWhere(function ($query) {
            $query->where('sender_id', $this->receiver_id)
                ->where('receiver_id', $this->sender_id);
        })
            ->when($this->ticket_id, fn($q) => $q->where('tiket_id', $this->ticket_id))
            ->with('sender:id,name', 'receiver:id,name')
            ->get();
        foreach ($messages as $message) {
            $this->appendChatMessage($message);
        }

        $this->user = User::find($user_id);
    }

    public function sendMessage()
    {
        if (trim($this->comment) === '') return;

        $chatMessage = Comment::create([
            'sender_id' => $this->sender_id,
            'receiver_id' => $this->receiver_id,
            'user_id' => $this->sender_id,
           'tiket_id' => $this->ticket_id,
            'comment' => $this->comment,
        ]);


        $chatMessage->load('sender:id,name', 'receiver:id,name');

        $this->appendChatMessage($chatMessage);
        broadcast(new MessageSendEvent($chatMessage))->toOthers();

        $this->comment = '';
    }


    #[On('echo-private:chat-channel.*,message.sent')]
    public function listenForMessage($event)

    {
        $chatMessage = Comment::whereId($event['message']['id'])
            ->with('sender:id,name', 'receiver:id,name')
            ->first();

        // Cegah duplikat dari pesan sendiri
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
