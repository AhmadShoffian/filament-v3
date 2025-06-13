<?php

namespace App\Livewire;

use App\Events\MessageSendEvent;
use App\Models\Comment;
use App\Models\Message;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class ChatComponent extends Component
{

    public $user;
    public $sender_id;
    public $receiver_id;
    public $comment = '';
    public $comments = [];
    public $users = [];

    public function render()
    {
        return view('livewire.chat-component');
    }


    public function mount($userId){

        $this->sender_id = auth()->user()->id;
        $this->user = User::findOrFail($userId);
        $this->receiver_id = $userId;
         $this->users = User::where('id', '!=', auth()->id())->get();

        $comments = Comment::where(function($query){
            $query->where('sender_id', $this->sender_id)
                  ->where('receiver_id', $this->receiver_id);
        })->orWhere(function($query){
            $query->where('sender_id', $this->receiver_id)
                  ->where('receiver_id', $this->sender_id);
        })
        ->with('sender:id,name', 'receiver:id,name')
        ->get();

        foreach($comments as $comment){
            $this->appendChatMessage($comment);
        }

        $this->user = User::whereId($userId)->first();
    }

    

    public function sendMessage(){
        $chatMessage = new Comment();
        $chatMessage->sender_id = $this->sender_id;
        $chatMessage->receiver_id = $this->receiver_id;
        $chatMessage->comment = $this->comment;
        $chatMessage->save();

        $this->appendChatMessage($chatMessage);
        
        broadcast(new MessageSendEvent($chatMessage))->toOthers();

        $this->comment = '';

    }

    #[On('echo-private:chat-channel.{sender_id},MessageSendEvent')]
    public function listenForMessage($event){
        $chatMessage = Comment::whereId($event['message']['id'])
            ->with('sender:id,name', 'receiver:id,name')
            ->first();

        $this->appendChatMessage($chatMessage);
    }


    public function appendChatMessage($comment){
        $this->comments[] = [
            'id' => $comment->id,
            'comment' => $comment->comment,
            'sender' => $comment->sender->name,
            'receiver' => $comment->receiver->name
        ];
    }
}
