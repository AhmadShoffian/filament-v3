<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Comment.
 *
 * @property int $id
 * @property int $ticket_id
 * @property int $user_id
 * @property string $comment
 * @property null|Carbon $created_at
 * @property null|Carbon $updated_at
 * @property null|string $deleted_at
 * @property User $user
 * @property Ticket $ticket
 */
class Comment extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'comments';

    public $timestamps = true;

    protected $casts = [
        'ticket_id' => 'int',
        'user_id' => 'int',
    ];

    protected $fillable = [
        'ticket_id',
        'user_id',
        'comment',
        'attachments',
        'sender_id',
        'receiver_id',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ticket()
    {
        return $this->belongsTo(Ticket::class, 'ticket_id');
    }

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }
    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }
}
