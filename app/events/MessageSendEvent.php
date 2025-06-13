<?php

namespace App\Events;

use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;


class MessageSendEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $comment;

    public function __construct($comment)
    {
        $this->comment = $comment;
    }

    // Channel privat untuk receiver_id
    public function broadcastOn(): array
{
    return [
        new PrivateChannel('chat.' . $this->comment->tiket_id),
    ];
}


    // Data yang akan dikirim ke frontend
    public function broadcastWith(): array
    {
        return [
            'id' => $this->comment->id,
            'comment' => $this->comment->comment,
            'sender_id' => $this->comment->sender_id,
            'receiver_id' => $this->comment->receiver_id,
        ];
    }

    // Optional: nama event custom
    public function broadcastAs(): string
    {
        return 'message.sent';
    }
}
